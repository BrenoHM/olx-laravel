<?php

namespace App\Livewire;

use Livewire\Component;

class Gallery extends Component
{
    public $images = [];
    public $featuredUrl = '';
    public function render()
    {
        return view('livewire.gallery');
    }

    public function mount($images) {
        $this->images = $images;
        $this->featuredUrl = $images->where('featured', 1)->first()->url;
    }

    public function changeFeatured($url) {
        $this->featuredUrl = $url;
    }
}
