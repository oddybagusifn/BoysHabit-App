<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $req)
    {
        $credentials = $req->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $req->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $req){
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
