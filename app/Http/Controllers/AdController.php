<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use Illuminate\Http\Request;

class AdController extends Controller
{

    public function list() {
        return view('list');
    }

    public function show(String $slug)
    {
        $ad = Advertise::query()->where('slug', $slug)->first();
        if(!$ad) {
            return redirect()->back()->with('error', 'Anúncio nao encontrado.');
        }
        $ad->views++;
        $ad->save();

        $relatedAds = Advertise::query()
                        ->with('images')
                        ->where('id', '!=', $ad->id)
                        ->where('state_id', $ad->state_id)
                        ->where('category_id', $ad->category_id)
                        ->orderBy('created_at', 'desc')
                        ->orderBy('views', 'desc')
                        ->limit(4)
                        ->get();

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

    public function category(Request $request, String $slug)
    {
        $category = \App\Models\Category::query()->where('slug', $slug)->first();
        if(!$category) {
            return redirect()->back()->with('error', 'Categoria nao encontrada.');
        }
        $filteredAds = Advertise::query()->where('category_id', $category->id)->paginate(10);
        return view('category-list', compact('filteredAds'));
    }

    public function create()
    {
        return view('ad.create');
    }
}
