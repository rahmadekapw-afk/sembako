<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\POSViewController::class, 'landing'])->name('landing');

Route::redirect('/login', '/admin/login')->name('login');

Route::prefix('pos')->name('pos.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\POSViewController::class, 'dashboard'])->name('dashboard');
    Route::get('/terminal', [\App\Http\Controllers\POSViewController::class, 'terminal'])->name('terminal');
    Route::get('/products', [\App\Http\Controllers\POSViewController::class, 'products'])->name('products');
    Route::get('/history', [\App\Http\Controllers\POSViewController::class, 'history'])->name('history');
    Route::get('/settings', [\App\Http\Controllers\POSViewController::class, 'settings'])->name('settings');
});
