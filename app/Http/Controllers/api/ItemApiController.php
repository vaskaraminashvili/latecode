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
        $item = Item::all();
        return new ItemCollection($item);

    }

     public function show($slug)
    {

        $item = Item::where('slug', $slug)->first();
        return new ItemResource($item);

    }
}
