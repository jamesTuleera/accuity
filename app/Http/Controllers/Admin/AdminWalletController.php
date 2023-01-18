<?php

namespace App\Http\Controllers\Admin;

use App\AdminWallet;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator;

class AdminWalletController extends Controller
{
    public function index()
    {
        $adWal = AdminWallet::get();
        return view('admin.create_wallets', compact('adWal'));
    }

    public function create(Request $dt)
    {
        $dt->validate([
            "name" => "required",
            "wallet_address" => "required"
        ]);

        $wallet = new AdminWallet();
        $wallet->user_id = Auth::user()->id;
        $wallet->name = $dt->name;
        $wallet->wallet_address = $dt->wallet_address;
        $wallet->save();

        return redirect()->back()->with('success', "Wallet address created successfully");
    }


    public function edit(Request $dt)
    {
        $dt->validate([
            "name" => 'required',
            "w_id" => 'required',
            "wallet_address" => 'required'
        ]);

        $wallet = AdminWallet::find($dt->w_id);
        $wallet->name = $dt->name;
        $wallet->wallet_address = $dt->wallet_address;
        $wallet->save();

        return redirect()->back()->with('success', "Wallet address edited successfully");
    }

    public function delete(Request $dt)
    {
        if(!isset($dt->did)){
            return redirect()->back()->with('failed', "Wallet Id was not found");
        }

        AdminWallet::where('id', $dt->did)->delete();
        return redirect()->back()->with('success', "Wallet deleted successfully");
    }

}
