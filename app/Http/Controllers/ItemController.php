<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        return view('item.index', compact('items'));
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
