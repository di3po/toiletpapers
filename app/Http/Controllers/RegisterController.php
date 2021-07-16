<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $attribute = request()->validate([
            'name' => 'required',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:7'
        ]);

        $user = User::create($attribute);

        Auth::login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
