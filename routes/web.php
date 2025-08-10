<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/portfolio', function () {
//     return view('portfolio');
// });

Route::get('/services1', function () {
    return view('layanan1');
});

Route::get('/services2', function () {
    return view('jasa-rab-pbg');
});

Route::get('/services3', function () {
    return view('layanan3');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/artikel', function () {
    return view('artikel');
});



Route::post('/konsultasi/kirim', [KonsultasiController::class, 'kirim'])->name('konsultasi.kirim');

