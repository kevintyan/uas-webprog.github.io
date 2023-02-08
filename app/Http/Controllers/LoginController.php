<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index() {
        return view('credentials.login');
    }

    public function login_auth(Request $request) {
        $validation = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($validation)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return redirect('/login')->with('failed', 'wrong email or password, try again!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
