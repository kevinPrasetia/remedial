<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'beranda']);
Route::get('/menu', [FrontendController::class, 'menu']);
Route::get('/kontak', [FrontendController::class, 'kontak']);
Route::get('/pemesanan/{id}', [FrontendController::class, 'detailPemesanan'])
    ->name('pemesanan.detail');
