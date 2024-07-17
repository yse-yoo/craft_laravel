<?php

use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
});

Route::group(['prefix' => 'artisan'], function () {
    Route::get('/', [ArtisanController::class, 'index'])->name('artisan.index');
    Route::get('/show/{id}', [ArtisanController::class, 'show'])->name('artisan.show');
});
