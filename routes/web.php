<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tag/{tag}', [TagController::class, 'index'])->name('tag.index');
Route::get('{slug}', [ItemController::class, 'show'])->name('item.show');

Route::get('/courses', function () {
    return view('courses');
});


//
//Route::get('/details/{slug}', function () {
//    $item = \App\Models\Item::find(1);
//    $lang = Str::lower($item->code[0]['language']);
//    $code = "```{$lang} \n";
//    $code .= $item->code[0]['content'];
//    return view('details', compact('code'));
//})->name('details');




