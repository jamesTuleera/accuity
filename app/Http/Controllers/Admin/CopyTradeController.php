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
        return view('admin.copy-trade', compact('trades'));
    }
}
