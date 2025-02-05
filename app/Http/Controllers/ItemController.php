<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return Item::query()
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function show($slug)
    {
        $item = Item::query()
            ->where('status', 1)
            ->where('slug', $slug)
            ->first();
        return view('item.show', ['item' => $item]);
    }
}
