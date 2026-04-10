<?php

use Illuminate\Support\Facades\Route;

// Rute Home
Route::get('/', function () {
    return view('welcome');
});

//route kontak
Route::get('/kontak', function () {
    return view('contact');
});

// Rute Profil
Route::get('/profil', function () {
    return view('profil');
});

// Rute Katalog Event
Route::get('/katalog', function () {
    return view('katalog');
});

// Rute Bantuan / FAQ
Route::get('/bantuan', function () {
    return view('bantuan');
});