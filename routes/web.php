<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.layoutAdminPanel');
// });

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/produk', function () {
    return view('pages.produk');
});

Route::get('/stok', function () {
    return view('pages.stok');
});

Route::get('/transaksi', function () {
    return view('pages.transaksi');
});

Route::get('/laporan-stok', function () {
    return view('pages.laporan-stok');
});

Route::get('/laporan-transaksi', function () {
    return view('pages.laporan-transaksi');
});

Route::get('/kelola-user', function () {
    return view('pages.kelola-user');
});