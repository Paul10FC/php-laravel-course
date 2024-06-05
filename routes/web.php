<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* 
    Rout::get    | READ
    Rout::post   | CREATE
    Rout::delete | DELETE
    Rout::UPDATE | UPDATE
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return 'Listado de publicaciones';
});

Route::get('/blog/{slug}', function ($slug) {
    return $slug;
});

Route::get('find', function (Request $request) {
    return $request->all(); 
});

