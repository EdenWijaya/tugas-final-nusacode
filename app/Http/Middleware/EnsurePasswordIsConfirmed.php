<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsurePasswordIsConfirmed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna sudah mengonfirmasi kata sandi
        if (! $request->session()->has('auth.password_confirmed_at') ||
            (time() - $request->session()->get('auth.password_confirmed_at', 0)) > config('auth.password_timeout', 10800)) {
            return redirect()->route('password.confirm');
        }

        return $next($request);
    }
}
