<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function delete($id)
    {
        dd($id);
        return view('dashboard.my-ads');
    }
}
