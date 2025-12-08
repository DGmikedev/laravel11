<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\BlogContrller;

use Illuminate\Support\Facades\Route;


// root
Route::view('/', 'test')->name('home');

/* Basic Layout */
Route::view('contact', 'layout/contact')->name('contact');

// Route::view('blog', 'layout/blog')->name('blog'); controller

Route::get('/blog', [BlogContrller::class, 'index'])->name('blog');

Route::view('about', 'layout/about')->name('about');


// pseudo-root
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
