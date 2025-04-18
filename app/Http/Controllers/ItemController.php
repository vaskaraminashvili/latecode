<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
//
//        $parent_tags = Tag::whereHas('children')->get();
//        $tags = Tag::query()
//            ->popular()
//            ->whereDoesntHave('children')->get();
        return view('item.index');
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
