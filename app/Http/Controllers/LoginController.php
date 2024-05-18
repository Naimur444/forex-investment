<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $field = filter_var($request->input('login_field'), FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($request->input('login_field')) ? 'phone' : 'username');
        $credentials = [
            $field => $request->input('login_field'),
            'password' => $request->input('password'),
        ];
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/investment-plans');
        }
    
        return redirect('/login')->withErrors([
            'email' => __('auth.failed'),
        ]);
    }
    
    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
