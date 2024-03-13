<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home page
Route::get('/', function () {

    $comics = config('comics.comics');

    return view('comics', compact('comics'));
})->name('comics');

//characters page
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

//comics page
Route::get('/comics', function () {

    $comics = config('comics.comics');

    return view('comics', compact('comics'));
})->name('comics');



//movies page
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

//tv page
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

