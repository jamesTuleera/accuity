<?php

namespace App\Http\Controllers;

use App\AdminWallet;
use App\Plans;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $totalRef = User::where('referal', $user->email)->count();
        $refbal = $user->wallet->update([
            'ref_bonus' => $totalRef * 10
        ]);

        $plans = Plans::get();



        return view('users.user_dashboard', compact('plans'));

    }

    public function referralView()
    {
        $user = Auth::user();
        $count_ref = User::where('referal', $user->email)->count();
        $referrals = User::where('referal', $user->email)->get();

        return view('users.referrals', compact(
            'count_ref',
            'referrals'
        ));
    }

    public function accountDetailsView()
    {
        return view('users.account_details');
    }

    public function btcUpdateWallet(Request $dt)
    {
        $dt->validate([
            'btc_address' => 'required'
        ]);

        Auth::user()->wallet->update([
            'btc_address' => $dt->btc_address,
        ]);

        return redirect()->back()->with('success', 'BTC wallet updated successfully');
    }

    public function notificationView()
    {
        return view('users.notifications');
    }

    public function profileView()
    {
        return view('users.profile');
    }

    public function supportView()
    {
        return view('users.support');
    }

    public function passwordView()
    {
        return view('users.changepassword');
    }

    public function updatePass(Request $dt)
    {
        $dt->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
            // 'password_confirmation' => 'required'
        ]);

        $user = Auth::user();

        if(!Hash::check($dt->old_password, $user->password)){
            return redirect()->back()->with('failed', 'Old password didn\'nt match');
        }


        $user->password = Hash::make($dt->password);
        $user->save();

        return redirect()->back()->with('success', 'Your password has been updated successfully');

    }

    public function depositView()
    {
        $transactions = Transaction::where('user_id', '=', Auth::user()->id)->where('type', '=', 'deposit')->orderBy('id','desc')->get();
        $wallets = AdminWallet::get();
        return view('users.deposit', compact('transactions', 'wallets'));
    }

    public function deposit(Request $data)
    {

        $data->validate([
            'trans_id' => 'required|string|max:255',
            'payMethod' => 'required', 'string', 'max:255',
            'amount' => 'required|max:255',
        ]);

        $trans = Transaction::create([
            'user_id' => Auth::user()->id,
            'reference' => uniqid(),
            'type' => 'deposit',
            'transaction_id' => $data->trans_id,
            'payment_method' => $data->payMethod,
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $data->amount,
            'status' => 'processing'
        ]);
        return redirect()->back()->with("success", "Kindly wait as we are processing your transaction");
    }



    public function withdrawalView()
    {
        return view('users.withdrawal');
    }

    public function withdrawal(Request $dt)
    {
        $dt->validate([
            'amount' => 'required',
            'withdrawal_option' => 'required'
        ]);

        $user = Auth::user();

        if($dt->withdrawal_option == 'investment'){
            if($dt->amount > $user->wallet->investment){
                return redirect()->back()->with('failed', 'You do not have sufficient funds in your investment wallet');
            }
            Transaction::create([
            'user_id' => $user->id,
            'reference' => uniqid(),
            'type' => 'Withdrawal',
            'transaction_id' => ' ',
            'payment_method' => '',
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $dt->amount,
            'status' => 'processing'
            ]);
        }

        if($dt->withdrawal_option == 'profit'){
            if($dt->amount > $user->wallet->profit){
                return redirect()->back()->with('failed', 'You do not have sufficient funds in your profit wallet');
            }
            Transaction::create([
            'user_id' => $user->id,
            'reference' => uniqid(),
            'type' => 'Withdrawal',
            'transaction_id' => ' ',
            'payment_method' => '',
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $dt->amount,
            'status' => 'processing'
            ]);
        }

        if($dt->withdrawal_option == 'bonus'){
            if($dt->amount > $user->wallet->bonus){
                return redirect()->back()->with('failed', 'You do not have sufficient funds in your bonus wallet');
            }
            Transaction::create([
            'user_id' => $user->id,
            'reference' => uniqid(),
            'type' => 'Withdrawal',
            'transaction_id' => ' ',
            'payment_method' => '',
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $dt->amount,
            'status' => 'processing'
            ]);
        }

        if($dt->withdrawal_option == 'bonus'){
            if($dt->amount > $user->wallet->bonus){
                return redirect()->back()->with('failed', 'You do not have sufficient funds in your bonus wallet');
            }
            Transaction::create([
            'user_id' => $user->id,
            'reference' => uniqid(),
            'type' => 'Withdrawal',
            'transaction_id' => ' ',
            'payment_method' => '',
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $dt->amount,
            'status' => 'processing'
            ]);
        }

        if($dt->withdrawal_option == 'referal_bonus'){
            if($dt->amount > $user->wallet->ref_bonus){
                return redirect()->back()->with('failed', 'You do not have sufficient funds in your bonus wallet');
            }
            Transaction::create([
            'user_id' => $user->id,
            'reference' => uniqid(),
            'type' => 'Withdrawal',
            'transaction_id' => '',
            'payment_method' => '',
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $dt->amount,
            'status' => 'processing'
            ]);

            $user->wallet->ref_bonus -= $dt->amount;
            $user->save();

        }



        if($dt->balance == 'balance'){
            if($dt->amount > $user->wallet->balance){
                return redirect()->back()->with('failed', 'You do not have sufficient funds in your bonus wallet');
            }
            Transaction::create([
            'user_id' => $user->id,
            'reference' => uniqid(),
            'type' => 'Withdrawal',
            'transaction_id' => '',
            'payment_method' => '',
            'previous_bal' => Auth::user()->wallet->balance,
            'amount' => $dt->amount,
            'status' => 'processing'
            ]);

            $user->wallet->ref_bonus -= $dt->amount;
            $user->save();

        }




        // Transaction::create([
        //     'user_id' => $user->id,
        //     'reference' => uniqid(),
        //     'type' => 'Withdrawal',
        //     'transaction_id' => ' ',
        //     'payment_method' => '',
        //     'previous_bal' => Auth::user()->wallet->balance,
        //     'amount' => $dt->amount,
        //     'status' => 'processing'
        //     ]);

        return redirect()->back()->with('success', 'Your withdrawal request was sent successfully');
    }

    public function transactions()
    {
        $depositTrans = Transaction::where('user_id', Auth::user()->id)->where('type', 'deposit')->orderBy('id', 'desc')->get();

        $withdrawTrans = Transaction::where('user_id', Auth::user()->id)->where('type', 'Withdrawal')->orderBy('id', 'desc')->get();

        $Alltrans = Transaction::where('user_id', Auth::user()->id)->get();

        return view('users.transactions', compact('depositTrans', 'withdrawTrans', 'Alltrans'));
    }
}

