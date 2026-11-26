<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Admin\ProdukAdminController;

Route::get('/', [ProdukController::class, 'index'])
    ->name('home');

Route::get('/produk/{produk:slug}', [ProdukController::class, 'show'])
    ->name('produk.show');

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('produk', ProdukAdminController::class)
            ->except('show');
    });