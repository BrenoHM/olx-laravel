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

        $relatedAds = Advertise::query()
                        ->where('id', '!=', $ad->id)
                        ->where('state_id', $ad->state_id)
                        ->where('category_id', $ad->category_id)
                        ->inRandomOrder()
                        ->limit(4)
                        ->get();

                        dd($relatedAds);

        return view('single-ad', compact('ad', 'relatedAds'));
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
