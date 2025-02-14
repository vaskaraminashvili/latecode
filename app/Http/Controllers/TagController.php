<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($tag, Request $request)
    {
        $items = Item::query()
            ->with([
                'tags'
            ])
            ->filter($request)
            ->where('status', 1)
            ->whereHas('tags', function ($query) use ($tag) {
                $query->where('slug', $tag);
            })
            ->paginate(12);
        return view('tag.index', ['items' => $items]);
    }
}
