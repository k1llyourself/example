<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Додайте цей рядок


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'username' =>  ['required', 'string'], 
            'password' =>  ['required', 'string'],
        ]);

        if(!Auth::attempt($request->only('username', 'password'))){
            return back()
                ->withInput()
                ->withErrors([
                    'username' => 'Невправильне ім\'я користувача або пароль.',
                  ]);
                
        }
        return redirect()->route('user.posts');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }   
}