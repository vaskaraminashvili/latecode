<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Tag;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request, $tag = null,)
    {
        $items = Item::query()
            ->with([
                'tags'
            ])
            ->filter($request)
            ->where('status', 1)
            ->when($tag !== null, function ($query) use ($tag) {
                return $query->whereHas('tags', function ($query) use ($tag) {
                    $query->where('slug', $tag);
                });
            })
            ->paginate(12)
            ->withQueryString();
        $parent_tags = Tag::whereHas('children')->get();
        $tags = Tag::query()
            ->popular()
            ->whereDoesntHave('children')->get();
        return view('item.index', compact('items', 'tags', 'parent_tags'));
    }

    public function show($slug)
    {
        $item = Item::query()
            ->with([
                'tags'
            ])
            ->where('status', 1)
            ->where('slug', $slug)
            ->first();
        return view('item.show', ['item' => $item]);
    }

}
