<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('register')->name('register.')->controller(UserRegisterController::class)->group(function () {
    Route::get('/', 'registerForm')->name('form');
    Route::post('/', 'register')->name('user');
});


Route::prefix('login')->name('login.')->controller(UserLoginController::class)->group(function () {
    Route::get('/', 'loginForm')->name('form');
    Route::post('/', 'login')->name('user');
    Route::post('/logout', 'destroy')->name('logout');
});

Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::get('/tag/{tag}', [TagController::class, 'index'])->name('tag.index');
Route::get('/items', [ItemController::class, 'index'])->name('item.index');
Route::get('{slug}', [ItemController::class, 'show'])->name('item.show');




//Route::get('/courses', function () {
//    return view('courses');
//});


//
//Route::get('/details/{slug}', function () {
//    $item = \App\Models\Item::find(1);
//    $lang = Str::lower($item->code[0]['language']);
//    $code = "```{$lang} \n";
//    $code .= $item->code[0]['content'];
//    return view('details', compact('code'));
//})->name('details');




