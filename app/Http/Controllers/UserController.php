<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    // SHOW REGISTER/CREATE FORM
    public function register() {
        return view('users.register');
    }

    // CREATE NEW USER
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // HASH PASSWORD
        $formFields['password'] = bcrypt($formFields['password']);

        //CREATE USER
        $user = User::create($formFields);

        //LOGIN
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    //LOGOUT USER
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been log out!');
    }

    //  SHOW LOGIN FORM
    public function login() {
        return view('users.login');
    }

    // AUTHENTICATE USER
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Your are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
