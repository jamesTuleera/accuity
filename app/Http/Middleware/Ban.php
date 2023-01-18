<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Ban
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
        if($user->role != '1' || $user->role != '222'){
            if ($user->status == 'disable') {
                 abort(403);
            }
            return $next($request);
        }else{
            abort(403);
        }
    }
}