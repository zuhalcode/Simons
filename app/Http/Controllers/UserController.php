<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    
    public function register()
    {
        return view('register.index');
    }
    
    public function login(Request $req)
    {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended('/dashboard');
        }


        return back()->with('loginError', 'Login gagal');
    }

    public function store(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|min:3',
            'NIK' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
        ]);

        User::create([
            'name' => $validated['name'],
            'NIK' => $validated['NIK'],
            'email' => $validated['email'],
            'card_id' => 1,
            'password' => Hash::make($validated['password']),
        ]); 

        return redirect('/login')->with('success', 'Berhasil mendaftar');
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/');


    }
}
