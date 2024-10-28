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
        $data = $request->validated();
        $user = auth()->user();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->state_id = $data['state_id'];
        $user->save();

        return redirect()->route('my_account')->with('success', 'Informações atualizadas.');
    }

    public function my_ads()
    {
        $user = auth()->user();
        $user->load('advertises');
        $user->load(['advertises.images' => function ($query) {
            $query->where('featured', 1);
        }]);
        // $user->advertises->load(['images', function ($query) {
        //     $query->where('featured', 1);
        // }]);
        //dd($user->advertises);
        return view('dashboard.my-ads', compact('user'));
    }
}
