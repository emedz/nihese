<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login',[
            'title'=>'Login',
            
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('/dashboard');
                } elseif ($user->level == 'petugas') {
                    return redirect()->intended('/dashboard/petugas');
                } elseif ($user->level == 'user') {
                    return redirect()->intended('/homeuser');
                }
                $request->session()->regenerate();
 
                return redirect()->intended('/login');
            }


    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
     
        request()->session()->regenerateToken();
     
        return redirect('/login');
    }

}
