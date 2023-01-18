<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function debit(Request $r)
    {
        $validate = $r->validate([
            'user_id' => 'required',
            // 'trans_type' => 'required',
            'amount' => 'required'
        ]);

        // $user = User::with('wallet')->find($r->user_id);
        // $user->wallet->debit_bal = $r->amount;
        // $user->save();
        // dd($user->wallet->debit_bal);

        $wallet = Wallet::where('user_id', $r->user_id)->get()[0];
        $wallet->debit_bal = $r->amount;
        $wallet->save();

        return back()->with('success', 'Account debited successfully');
        // dd($wallet->debit_bal);

    }
}
