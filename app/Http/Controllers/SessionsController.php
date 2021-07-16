<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }

    public function store(){
        // validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt to authenticate and log in the user
        // based on the provided credentials($attempts)
        if(! Auth::attempt($attributes)){
            // auth failed

            /* return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials could not be verified.']); */
       
            // or

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();
        
        // redirect with success flash message
        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
