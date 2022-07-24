<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckIfGarage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = User::find(auth()->user()->id);
        if ($user->status == 0) {
            return redirect('/');
        } elseif ($user->status == 1) {
            if ($user->garage_profile != NULL) {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
