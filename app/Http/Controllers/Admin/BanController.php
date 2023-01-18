<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class BanController extends Controller
{
    public function banStatus(Request $r, $ban_status, $user_id)
    {
        ($ban_status == 'ban') ? $stat = 'disable' : $stat = 'active';
        ($ban_status == 'ban') ? $role = '0' : $role = '1';

        $user = User::where('id', $user_id)->get()[0];
        $user->role = $role;
        $user->status = $stat;
        $user->save();

        return back()->with('success', 'Account status successfully changed to '. $stat);

    }
}
