<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\State;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function my_account()
    {
        $data['user'] = auth()->user();
        $data['states'] = State::all();
        return view('dashboard.my-account', $data);
    }

    public function action_my_account(UpdateProfileRequest $request)
    {
        $data = $request->only('name', 'email', 'state');

        $stateRegister = State::find($data['state']);
        if (!$stateRegister) {
            return redirect()->route('/');
        }
        $user = auth()->user();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->state()->associate($stateRegister);
        $user->save();

        return redirect()->route('my_account');
    }
}
