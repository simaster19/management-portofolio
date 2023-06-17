<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:3'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->roles == 'ADMIN') {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

        return back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
