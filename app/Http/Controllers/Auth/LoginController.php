<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Ke mana harus mengarahkan pengguna setelah login.
     *
     * @var string
     */
    protected $redirectTo = '/homepage';

    /**
     * Membuat instance controller baru.
     *
     * @return void
     */
    public function __construct()
    {
        // Middleware untuk hanya mengizinkan pengguna yang tidak terautentikasi untuk mengakses login
        // $this->middleware('guest')->except('logout');
    }

    /**
     * Menangani setelah autentikasi berhasil.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Auth\User  $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function authenticated(Request $request, $user)
    {
        // Mengecek apakah nama pengguna mengandung kata "admin"
        if (stripos($user->name, 'admin') !== false) {
            return redirect('/admin/dashboard');
        }

        // Redirect untuk pengguna biasa
        return redirect('/homepage');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login'); // atau sesuaikan dengan halaman setelah logout
    }
}
