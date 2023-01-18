<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
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
        $user = Auth::user();
        if($user->role == 1){
            if ($user->status != 'active') {
                return redirect()->route('home');
                //  abort(403);
            }
            return $next($request);
        }else{
            abort(403);
        }
    }
}
