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

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been log out!');
    }
}
