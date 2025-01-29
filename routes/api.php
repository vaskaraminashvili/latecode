<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', function (Request $request) {
    return [
        "widget" => [
            "debug" => "on",
            "window" => [
                "title" => "Sample Konfabulator Widget",
                "name" => "main_window",
                "width" => 500,
                "height" => 500
            ],
            "image" => [
                "src" => "Images/Sun.png",
                "name" => "sun1",
                "hOffset" => 250,
                "vOffset" => 250,
                "alignment" => "center"
            ],
            "text" => [
                "data" => "Click Here",
                "size" => 36,
                "style" => "bold",
                "name" => "text1",
                "hOffset" => 250,
                "vOffset" => 100,
                "alignment" => "center",
                "onMouseUp" => "sun1.opacity = (sun1.opacity / 100) * 90;"
            ]
        ]
    ];;
});
