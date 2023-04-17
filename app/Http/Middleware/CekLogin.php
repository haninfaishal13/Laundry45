<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if(!Auth::check()) {
            return redirect('/')->with('auth_error', 'Sesi habis, harap login kembali');
        }
        $arr_role = explode('|', $role);
        $user = Auth::user();
        if(in_array($user->role, $arr_role)) {
            return $next($request);
        }
        return redirect('/')->with('auth_error', 'Kamu tidak punya akses');
    }
}
