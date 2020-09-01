<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view(
            'auth.register'
        );
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'pass' => 'required|string|max:50|min:5',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'pass' => Hash::make($request->pass),
        ]);

        // login 
        Auth::login($user);

        return redirect( route('books.index') );
    }
}
