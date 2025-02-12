<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $tags = Tag::query()
            ->where('status', 1)
            ->with(['items' => function ($query) {
                $query->limit(12);
            }])
            ->withCount('items')
            ->orderBy('items_count', 'desc')
            ->offset(4)
            ->limit(5)
            ->get();
        return view('home', compact('tags'));
    }
}
