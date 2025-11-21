<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // ambil field identifier (NIM/NIDN) dan password dari form
        $credentials = $request->only('identifier', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $role = $user->role;

            return match ($role) {
                'mahasiswa'   => redirect()->route('mahasiswa.dashboard'),
                'dosen'       => redirect()->route('dosen.dashboard'),
                'koordinator' => redirect()->route('koordinator.dashboard'),
                'kaprodi'     => redirect()->route('kaprodi.dashboard'),
                default       => abort(403, 'Peran tidak dikenal.')
            };
        }

        return back()->withErrors(['login' => 'Identifier atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}