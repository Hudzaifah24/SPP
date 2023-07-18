<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_page() {
        return view('pages.auth.login');
    }

    public function login_logic() {
        // return ;
    }

    public function register_page() {
        return view('pages.auth.register');
    }

    public function register_logic() {
        // return ;
    }
}
