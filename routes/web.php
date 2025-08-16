<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortfolioController;

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

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest routes (login)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminController::class, 'login'])->name('login.post');
    });

    // Protected admin routes
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

        // Portfolio management
        Route::resource('portfolios', PortfolioController::class);
        Route::patch('/portfolios/{id}/toggle-featured', [PortfolioController::class, 'toggleFeatured'])->name('portfolios.toggle-featured');
    });
});

// Public Portfolio Route (akan dibuat nanti)
Route::get('/portfolio', function () {
    $portfolios = \App\Models\Portfolio::active()->orderBy('sort_order')->orderBy('created_at', 'desc')->get();
    return view('portfolio', compact('portfolios'));
})->name('portfolio');

// API Route for Portfolio Details
Route::get('/api/portfolios/{id}', function ($id) {
    $portfolio = \App\Models\Portfolio::with('images')->find($id);

    if (!$portfolio) {
        return response()->json([
            'success' => false,
            'message' => 'Portfolio tidak ditemukan'
        ], 404);
    }

    return response()->json([
        'success' => true,
        'portfolio' => $portfolio
    ]);
})->name('api.portfolios.show');
