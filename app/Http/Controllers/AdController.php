<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function show(String $slug)
    {
        $ad = Advertise::query()->where('slug', $slug)->first();
        if(!$ad) {
            return redirect()->back()->with('error', 'Anúncio nao encontrado.');
        }
        $ad->views++;
        $ad->save();
        return view('single-ad', compact('ad'));
    }

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