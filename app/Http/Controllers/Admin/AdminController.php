<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\Wallet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }



    public function depositView()
    {
        $transactions = Transaction::where('type', '=', 'deposit')->orderBy('id','desc')->get();
        return view('admin.deposits', compact('transactions'));
    }

    public function depositProcessing(Request $data)
    {

        // dd($data->update_status);
        $trans = Transaction::with('user')->find($data->t_id);


        // dd($trans->user->wallet->investment);

        if($trans->status == 'Success' && $data->update_status != 'Success'){
            $newInvest = $trans->user->wallet->investment - $data->amount;
            $newBal = $trans->user->wallet->balance - $data->amount;
        }elseif($data->update_status != 'Success'){
            $newInvest = $trans->user->wallet->investment + 0;
            $newBal = $trans->user->wallet->balance + 0;
        }else{
            $newInvest = $trans->user->wallet->investment + $data->amount;
            $newBal = $trans->user->wallet->balance + $data->amount;
        }

        if($data->update_status == 'Success'){

            $trans->user->wallet->update([
                'balance' => $newBal,
                'investment' => $newInvest
            ]);
            $trans->update(['status' => $data->update_status]);

        }else{
            $trans->user->wallet->update([
                'balance' => $newBal,
                'investment' => $newInvest
            ]);
            $trans->update(['status' => $data->update_status]);
        }

        return redirect()->back()->with('success', 'Status successfully changed');
    }

    public function usersView()
    {

        $users = User::where('role', 1)->latest()->get();
        // dd($users[0]->wallet);
        return view('admin.users', compact('users'));
    }


    public function payments(Request $dt)
    {

        $dt->validate([
            'user_id' => 'required|string|max:255',
            'amount' => ['required', 'string', 'max:255'],
            'trans_type' => 'required|max:255',
        ]);

        $user = User::find($dt->user_id);

        // dd($user->wallet);
        if($dt->trans_type == "Profit"){
            $user->wallet->update([
                'profit' => $user->wallet->profit + $dt->amount,
                'balance' => $user->wallet->balance + $dt->amount
            ]);
        }

        if($dt->trans_type == "Bonus"){
            $user->wallet->update([
                'bonus' => $user->wallet->bonus + $dt->amount,
                'balance' => $user->wallet->balance + $dt->amount
            ]);
        }

        if($dt->trans_type == "Investment"){
            $user->wallet->update([
                'investment' => $user->wallet->investment + $dt->amount,
                'balance' => $user->wallet->balance + $dt->amount
            ]);
        }

           if($dt->trans_type == "Referal Bonus"){
            $user->wallet->update([
                'ref_bonus' => $user->wallet->ref_bonus + $dt->amount,
                'balance' => $user->wallet->balance + $dt->amount
            ]);
        }

        Transaction::create([
            'user_id' => $dt->user_id,
            'reference' => uniqid(),
            'type' => $dt->trans_type,
            'transaction_id' => uniqid(),
            'payment_method' => "Bitcoin",
            'previous_bal' => 0,
            'amount' => $dt->amount,
            'status' => 'Success'
        ]);

        return redirect()->back()->with('success', "Credited successfully");
        // dd($users->wallet->balance);

        // return view('admin.users', compact('users'));
    }



    public function withdrawalView()
    {
        $transactions = Transaction::where('type', 'Withdrawal')->where('status', '!=', 'Success')->orderBy('id', 'desc')->get();
        return view('admin.withdrawal_request', compact('transactions'));
    }

    public function withdrawalApproval(Request $data)
    {

        // dd($data->update_status);
        $trans = Transaction::with('user')->find($data->t_id);


        // dd($trans->user->wallet->balance);

        // if($trans->status == 'Success' && $data->update_status != 'Success'){
        //     $newInvest = $trans->user->wallet->investment + $data->amount;
        //     $newBal = $trans->user->wallet->balance + $data->amount;
        // }elseif($data->update_status != 'Success'){
        //     $newInvest = $trans->user->wallet->investment + 0;
        //     $newBal = $trans->user->wallet->balance + 0;
        // }else{
        //     $newInvest = $trans->user->wallet->investment - $data->amount;
        //     $newBal = $trans->user->wallet->balance - $data->amount;
        // }

        if($data->update_status == 'Success'){

            // $trans->user->wallet->update([
            //     'balance' => $newBal,
            //     'investment' => $newInvest
            // ]);

            // $trans->update(['status' => $data->update_status]);


            // dd($trans->user->wallet->balance);
            $wallet = Wallet::where('user_id', $trans->user->id)->get();
            // dd($wallet[0]->balance);
             $wallet[0]->balance -= $data->amount;
             $wallet[0]->investment -= $data->amount;
             $wallet[0]->save();

             $trans->status = $data->update_status;
             $trans->save();

        }else{
            // $trans->user->wallet->update([
            //     'balance' => $newBal,
            //     'investment' => $newInvest
            // ]);
            // $trans->update(['status' => $data->update_status]);

            $trans->status = $data->update_status;
            $trans->save();
        }

        return redirect()->back()->with('success', 'Status successfully changed');
    }

    public function deleteUser($type, $user_id)
    {

        // die($type .' '. $user_id);
        if($type == "permanent"){
            $user = User::find($user_id);
            $user->delete();
            return redirect()->back()->with('success', 'User deleted permanently');
        }

        if($type == "temporary"){
            $user = User::find($user_id);
            $user->update(['mine' => "Deleted"]);
            return redirect()->back()->with('success', 'User deleted temporarily');
        }
    }

    public function manager(Request $r)
    {
        $user = User::find($r->user_id);
        $user->mine = $r->manager;
        $user->save();

        return redirect()->back()->with('success', 'Account Manager assigned successfully');

    }
}

