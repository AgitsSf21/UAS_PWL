<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function loginStore(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role_id == 2) {
                $request->session()->regenerate();
                return redirect('/dashboard')->with('success', 'Welcome back!');
            }elseif (Auth::user()->role_id == 3) {
                $request->session()->regenerate();
                return redirect('/');
            }
        }
        return back()->with('loginError', 'Login failed!, please try again!');
    }

    public function register(){
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function registerStore(Request $request)
    {
        $credentials = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        $credentials['role_id'] = 3;

        $credentials['password'] = Hash::make($credentials['password']);


        User::create($credentials);
        return redirect('/dashboard')->with('toastr-success', 'Register Success');
    }
}
