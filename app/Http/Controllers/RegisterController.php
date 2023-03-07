<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register',[
            'title'=>'Register'
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'name'=>'required',
        'username'=>['required','unique:users'],
        'email'=>'required|email:dns|unique:users',
        'password'=>'required'
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);

       return redirect('/login')->with('success', 'Registration successfull!! please login');
    }
}
