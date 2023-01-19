<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role == 1){
            return redirect()->route('users.user_dashboard');
        }

        if(Auth::user()->role == 222){
            // dd("Admin is coming soon");
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('welcome');
            // abort(403);
        }
    }


}
