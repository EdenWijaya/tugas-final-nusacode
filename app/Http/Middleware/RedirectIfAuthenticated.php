<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * The URI that should be redirected if the user is authenticated.
     *
     * @var array
     */
    protected $redirectTo = '/home';

    /**
     * Create a new middleware instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    // app/Http/Middleware/RedirectIfAuthenticated.php

    public function handle($request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect($this->redirectTo);
            }
        }

        return $next($request);
    }
}
