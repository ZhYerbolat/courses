<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        dd($role);
        if (!Auth::user())
           return redirect()->route('home');

        if (User::find(Auth::id())->role->slug != $role)
            return redirect()->route('home');

        return $next($request);
    }
}
