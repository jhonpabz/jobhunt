<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // SHOW REGISTER/CREATE FORM
    public function register() {
        return view('users.register');
    }
}
