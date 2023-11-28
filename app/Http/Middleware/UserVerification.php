<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    $user =     Auth::user();
        if ($user->id_verification == null) {
            return redirect()->route('verification'); //  ('users.verification');
        }

        return $next($request);
    }
}
