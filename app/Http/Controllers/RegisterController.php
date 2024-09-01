<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;

// class RegisterController extends Controller
// {
//     public function index()
//     {
//         return view('register.index');
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'username' => ['required', 'string', 'max:50', 'unique:users,username'],
//             'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
//         ]);

//         $user = User::query()->create([
//             'username' => $validated['username'],
//             'password' => bcrypt($validated['password']),
//         ]);
       
//         return redirect()->route('user.posts');
//     }
// }