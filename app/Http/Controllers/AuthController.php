<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegister()
    {
        if(Auth::check()){
            return redirect()->route('customers.index');
        }
        
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user =  User::create(array_merge($request->validated(), [
            'password' => Hash::make($request->password)
        ]));

        Auth::login($user);

        return redirect()->route('customers.index');
    }

    public function showlogin()
    {
        if(Auth::check()){
            return redirect()->route('customers.index');
        }
        
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt( $request->only('email', 'password'))) {
            return redirect()->route('customers.index');
        }

        return redirect()->route("login")->withErrors(['email' => 'کاربر با مشخصات وارد شده پیدا نشد']);;
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
