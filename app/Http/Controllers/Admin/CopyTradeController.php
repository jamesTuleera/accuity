<?php

namespace App\Http\Controllers\Admin;

use App\CopyTrade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CopyTradeController extends Controller
{
    //

    public function index() {
        $trades = CopyTrade::latest()->get();
        // return view('admin.copy-trade', compact('trades'));
    }

    public function add(Request $r) {
        $r->validate([
            'name' => 'required',
            'user_id' => 'required',
        ]);

        CopyTrade::create([
            'name'=> $r->name,
            'user_id'=> $r->user_id
        ]);

        return back()->with('success', 'You have successful added name for copy trade');
    }
}
