<?php

namespace App\Http\Controllers;

use App\CopyTrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopyTradeController extends Controller
{
    //

    public function index($id) {

        $trade = CopyTrade::where('id', $id)->where('user_id', Auth::id())->latest()->first();
        $trade->status = 1;
        $trade->save();

        return back()->with('success', 'Your account is now operating on Copy-Trading');
    }
}
