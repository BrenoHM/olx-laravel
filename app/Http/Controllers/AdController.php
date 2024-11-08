<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function delete(String $id)
    {
        $ad = auth()->user()->advertises()->where('id', $id)->first();
        if(!$ad) {
            return redirect()->back()->with('error', 'Anúncio não encontrado.');
        }
        $ad->images()->delete();
        $ad->delete();
        return redirect()->back()->with('success', 'Anúncio excluído com sucesso.');
    }
}
