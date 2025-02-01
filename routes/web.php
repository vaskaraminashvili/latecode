<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/details', function () {
    $item = \App\Models\Item::find(1);
    $lang = Str::lower($item->code[0]['language']);
    $code = "```{$lang} \n";
    $code .= $item->code[0]['content'];
    return view('details', compact('code'));
});

