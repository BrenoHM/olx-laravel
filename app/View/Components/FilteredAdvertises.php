<?php

namespace App\View\Components;

use App\Models\Advertise;
use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilteredAdvertises extends Component
{

    public $advertiseList = null;
    public $categories;
    public function __construct()
    {
        $this->advertiseList = Advertise::orderBy('created_at', 'desc')->limit(4)->get();

        $this->categories = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}
