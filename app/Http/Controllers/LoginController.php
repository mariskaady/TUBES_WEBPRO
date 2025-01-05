<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login options page.
     */
    public function showLoginOptions()
    {
        return view('Login.pilihanLogin');
    }

    /**
     * Show the login form for Petugas.
     */
    public function showLoginPetugas()
    {
        return view('Login.loginPetugas');
    }

    /**
     * Show the login form for Pasien.
     */
    public function showLoginPasien()
    {
        return view('Login.loginPasien');
    }

    /**
     * Handle login request for Petugas.
     */
    public function loginPetugas(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'petugas') {
                return redirect()->route('petugas.index');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(['role' => 'Anda bukan petugas.']);
            }
        }

        return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
    }

    /**
     * Handle login request for Pasien.
     */
    public function loginPasien(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'pasien') {
                return redirect()->route('pasien.dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(['role' => 'Anda bukan pasien.']);
            }
        }

        return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
    }

    /**
     * Handle logout request.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
