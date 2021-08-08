<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validate the request

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //authenticate the request

        if(Auth::attempt($attributes))
        {
            //session fixation
            session()->regenerate();

            //then redirect
            return redirect('/')->with('success' , 'welcome Back!');
        }

        // auth failed

        return back()->withInput()->withErrors(['email' => 'your provided credentials could not be verified.']);

        //redirect the user with a message
    }


    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
