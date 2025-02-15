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
            ->orderBy('created_at', 'desc')
            ->get();
        return new ItemCollection($item);

    }

     public function show($slug)
    {
        $item = Item::query()
            ->where('status', 1)
            ->where('slug', $slug)
             ->orderBy('created_at', 'desc')
            ->first();
// dd($item);
        return new ItemResource($item);

    }
}
