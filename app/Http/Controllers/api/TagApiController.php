<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Resources\ItemCollection;
use App\Http\Resources\ItemResource;

class TagApiController extends Controller
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
// dd($items);
        return new ItemCollection($items);

    }
}
