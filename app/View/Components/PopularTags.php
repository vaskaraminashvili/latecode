<?php

namespace App\View\Components;

use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularTags extends Component
{
    public $tags;

    public function render(): View
    {
        $this->tags = Tag::query()
            ->popular()
            ->limit(10)
            ->get();
        return view('components.popular-tags');
    }
}
