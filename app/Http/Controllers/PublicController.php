<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function contactView()
    {
        return view('contact');
    }
}
