<?php

use App\Livewire\Dash\Dashboard;
use App\Livewire\Landing\About;
use App\Livewire\Landing\Index;
use App\Livewire\Landing\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('home');
Route::get('/products', Products::class)->name('products');
Route::get('/about', About::class)->name('about');
// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dash');
});

require __DIR__.'/auth.php';
