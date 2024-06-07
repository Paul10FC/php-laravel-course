<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/* 
    Rout::get    | READ
    Rout::post   | CREATE
    Rout::delete | DELETE
    Rout::UPDATE | UPDATE
*/

/* Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post'); */

Route::controller(PageController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post'); 
});

/* Route::get('find', function (Request $request) {
    return $request->all(); 
})->name('post'); */

