<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
            return "Hai " . Auth::user()->name;
        }
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function adminlogin()
    {
        return view('loginadmin.index');
    }
    public function postloginadmin(Request $request)
    {
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect('/adm');
        }
        return redirect('/loginadmin');
    }
}
