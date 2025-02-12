<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $categories;

    public function render(): View
    {
        $this->categories = Category::all();
        return view('components.header', ['categories' => $this->categories]);
    }
}
