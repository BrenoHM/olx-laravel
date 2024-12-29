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
        'negotiable' => 'required|boolean',
        'photos' => 'required|array|image|min:1|max:5',
        'photos.*' => 'max:2048',
    ];

    protected $messages = [
        '*.required' => 'Este campo é obrigatório.',
        'photos.image' => 'Só é permitido enviar imagens.',
        'photos.max' => 'Só podem ser enviadas até 5 fotos.',
        'photos.*.max' => 'A imagem deve ter no máximo 2MB.',
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
