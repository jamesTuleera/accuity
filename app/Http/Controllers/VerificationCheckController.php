<?php

namespace App\Http\Controllers;

use App\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationCheckController extends Controller
{
    //
    public function index() {
        if (Auth::user()->verified_at != null) {
            return redirect()->route('users.user_dashboard');
        }

        $verification = Verification::where('user_id', Auth::id())->where('status', 'pending')->latest()->first();
        return view('users.verification', compact('verification'));
    }


    public function submit(Request $r)
    {

        $r->validate([
            'front' =>  'image|mimes:jpeg,JPEG,png,jpg|max:5048|required',
            'back' =>  'image|mimes:jpeg,JPEG,png,jpg|max:5048|required',
            'id_type' =>  'required',
        ]);

        $imageName = $r->file('front')->getClientOriginalName();
        $saveName = uniqid(). '-' . $imageName;
        $r->file('front')->storeAs('public/verification/', $saveName);



        $docTem = $r->file('back')->getClientOriginalName();
        $saveDocName = uniqid(). '-' . $docTem;
        $r->file('back')->storeAs('public/verification/', $saveDocName);


        Verification::create([
            'user_id' => Auth::user()->id,
            'id_card_front' => $saveName,
            'id_card_back' => $saveDocName,
            'id_type' => $r->type,
        ]);

        return back()->with('success', 'Your ID verification has been submitted successfully and it\'s pending verification by the admin ');
    }
}
