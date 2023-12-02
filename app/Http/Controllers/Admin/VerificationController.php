<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Verification;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    //
    public function index()
    {
        $verifications = Verification::where('status', 'pending')->latest()->get();
        return view('admin.verifications', compact('verifications'));
    }

    public function update(Request $r)
    {
        $verify = Verification::find($r->id);

        $verify->status = $r->status;
        $verify->save();


        if ($verify->status == 'success') {
            $verify->user->verified_at = now();
            $verify->user->save();
        }

        return back()->with('success', 'Verification status updated successfully');

    }
}
