<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function checkUsername($username)
    {
        try {
            $user = User::where('username', $username)->first();
            if ($user) {
                return 'false';
            } else {
                return 'true';
            }
        } catch (\Exception $e) {
            // Log the error or handle it in some other way
            return response('Internal Server Error', 500);
        }
    }
    

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:14', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'referred_by' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $referral_code = Str::random(20);
        $referred_by = $request->input('referred_by');

        if (!empty($request->input('referred_by'))) {
            $referrer = User::where('referral_code', $request->input('referred_by'))->first();
            if ($referrer) {
                $referrer->referral_bonus += 250;
                $referrer->save();
            }
        }

        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'username' => $request->input('username'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'referral_code' => $referral_code,
            'referred_by' => $referred_by,
        ]);

        return redirect('/login')->with('success', 'Registration successful');
    }
}
