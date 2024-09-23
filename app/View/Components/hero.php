<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{
    public $states;
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->states = [
            ['value' => 'PB', 'label' => 'Paraíba'],
            ['value' => 'PR', 'label' => 'Paraná'],
            ['value' => 'RJ', 'label' => 'Rio de Janeiro'],
            ['value' => 'SP', 'label' => 'São Paulo'],
            ['value' => 'RS', 'label' => 'Rio Grande do Sul'],
            ['value' => 'SC', 'label' => 'Santa Catarina'],
            ['value' => 'MS', 'label' => 'Mato Grosso do Sul'],
            ['value' => 'MT', 'label' => 'Mato Grosso'],
            ['value' => 'GO', 'label' => 'Goiás'],
        ];

        $this->categories = [
            ['value' => '1', 'label' => 'Casa'],
            ['value' => '2', 'label' => 'Apartamento'],
            ['value' => '3', 'label' => 'Kitnet'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
