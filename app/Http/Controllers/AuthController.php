<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        dd($request->all());
    }
}
