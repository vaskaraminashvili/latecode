<?php

namespace App\View\Components;

use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Counter extends Component
{
    public $tags;

    public function render(): View
    {
        $this->tags = Tag::query()
            ->where('status', 1)
            ->withCount('items')
            ->orderBy('items_count', 'desc')
            ->limit(4)
            ->get();
        return view('components.counter', ['tags' => $this->tags]);
    }
}
