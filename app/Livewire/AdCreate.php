<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AdCreate extends Component
{
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $negotiable;
    //public $image;

    public function render()
    {
        $categories = Category::all();
        return view('livewire.ad-create', compact('categories'));
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // Save the ad to the database

        session()->flash('message', 'Ad created successfully.');

        return redirect()->to('/ads');
    }
}
