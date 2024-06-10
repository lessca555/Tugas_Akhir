<?php

use App\Livewire\Dash\CreateAdmin;
use App\Livewire\Dash\Dashboard;
use App\Livewire\Dash\Inventory;
use App\Livewire\Dash\Procurement;
use App\Livewire\Dash\Sales;
use App\Livewire\Dash\StatsAnalisis;
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
    Route::get('/create_admin', CreateAdmin::class)->name('create_admin');
    Route::get('/sales', Sales::class)->name('sales');
    Route::get('/inventory', Inventory::class)->name('inventory');
    Route::get('/procurement', Procurement::class)->name('procurement');
    Route::get('/stats_analisis', StatsAnalisis::class)->name('stats');
});

require __DIR__.'/auth.php';
