<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $user = User::create(request()->validate([
            'name' => 'required',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:7'
        ]));

        Session::push('user', [
            'name' => $user['name'],
            'email' => $user['email']
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
