<?php

namespace App\Http\Controllers;

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

    public function action_my_account(Request $request)
    {
        return view('dashboard.my-account');
    }
}
