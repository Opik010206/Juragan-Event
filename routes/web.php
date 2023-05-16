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


// Home
Route::get('/', function () {
    return view('index', [
        'tittle' => 'Home'
    ]);
});



// Event
Route::get('/event', function () {
    return view('event', [
        'tittle' => 'Event'
    ]);
});
// Detail Event (Deskripsi)
Route::get('event/detileEvent', function () {
    return view('detailEvent.deskripsi', [
        'tittle' => 'Detile Event'
    ]);
});


// Tentang
Route::get('/tentang', function () {
    return view('tentang', [
        'tittle' => 'Tentang'
    ]);
});


// Blog
Route::get('/blog', function () {
    return view('blog', [
        'tittle' => 'Blog'
    ]);
});


// Galery
Route::get('/galeri', function () {
    return view('galeri', [
        'tittle' => 'Galeri'
    ]);
});


// Hubungi Kami
Route::get('/hubungiKami', function () {
    return view('hubungiKami', [
        'tittle' => 'Hubungi Kami'
    ]);
});


