<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request)
    
    {
        $userData = $request->validated();
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);
        Auth::loginUsingId($user->id);
        return redirect()->route('select-state');
    }

    public function select_state()

    {
        $data['states'] = State::all();
        return view('auth.select-state', $data);
    }

    public function state_action(Request $request)
    
    {
        $state = $request->only('state');
        $stateRegister = State::find($state['state']);
        if (!$stateRegister) {
            return redirect()->route('login');
        }
        
        Auth::user()->state()->associate($stateRegister);
        Auth::user()->save();
        
        return redirect()->route('my_account');
    }

    public function login_action(LoginRequest $request)
    
    {
        $loginData = $request->validated();
        if (!Auth::attempt($loginData)) {
            return redirect()->route('login')->with('error', 'E-mail ou senha inválidos');
        }
        return redirect()->route('my_account');
    }

    public function logout()
    
    {
        Auth::logout();
        return redirect()->route('login');
    }
     
}
