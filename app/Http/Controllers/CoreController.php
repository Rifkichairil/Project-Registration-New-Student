<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoreController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }


    public function auth(Request $req)
    {
        $validator = $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            # code...
            return redirect()->intended('/admin');
        } else {
            return redirect()->route('login')->with('error', 'Periksa kembali email atau password anda !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
