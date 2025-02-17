<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Resources\ItemCollection;
use App\Http\Resources\ItemResource;

class ItemApiController extends Controller
{
    public function index()
    {
        $item = Item::query()
            ->where('status', 1)
            ->with([
                'tags'
            ])
            ->orderBy('created_at', 'desc')
            ->get();
        return new ItemCollection($item);

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
// dd($item);
        return new ItemResource($item);

    }
}
