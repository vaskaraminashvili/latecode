<?php

namespace App\Http\Controllers;

use App\Models\Item;

class TagController extends Controller
{
    public function index($tag)
    {
        $items = Item::query()
            ->with([
                'tags'
            ])
            ->where('status', 1)
            ->whereHas('tags', function ($query) use ($tag) {
                $query->where('slug', $tag);
            })
            ->paginate(12);
        return view('tag.index', ['items' => $items]);
    }
}
