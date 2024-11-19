<?php

namespace App\Livewire;

use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        return view('livewire.gallery');
    }

    public function mount($images) {
        dd($images);
    }
}
