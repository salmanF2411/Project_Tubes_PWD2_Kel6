<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.layoutAdminPanel');
// });

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/produk', function () {
    return view('pages.produk');
})->name('produk');

Route::get('/stok', function () {
    return view('pages.stok');
})->name('stok');

Route::get('/transaksi', function () {
    return view('pages.transaksi');
})->name('transaksi');

Route::get('/laporan-stok', function () {
    return view('pages.laporan-stok');
})->name('laporan-stok');

Route::get('/laporan-transaksi', function () {
    return view('pages.laporan-transaksi');
})->name('laporan-transaksi');

Route::get('/kelola-user', function () {
    return view('pages.kelola-user');
})->name('kelola-user');