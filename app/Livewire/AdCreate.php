<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdCreate extends Component
{

    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $category_id;
    public $negotiable;
    public $photos = [];

    protected $rules = [
        'title' => 'required|min:8|max:255',
        'description' => 'required|min:8|max:255',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'negotiable' => 'boolean',
        'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function render()
    {
        $categories = Category::all();
        return view('livewire.ad-create', compact('categories'));
    }

    public function save()
    {
        $this->validate();

        // Save the ad to the database

        session()->flash('message', 'Ad created successfully.');

        return redirect()->to('/ads');
    }
}
