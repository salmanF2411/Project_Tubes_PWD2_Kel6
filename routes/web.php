<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// ============================================
// PUBLIC ROUTES - LOGIN
// ============================================
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// ============================================
// PROTECTED ROUTES - REQUIRE AUTHENTICATION
// ============================================
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Products
    Route::get('/produk', function () {
        return view('pages.produk');
    })->name('produk');

    // Stock/Inventory
    Route::get('/stok', function () {
        return view('pages.stok');
    })->name('stok');

    // Transactions
    Route::get('/transaksi', function () {
        return view('pages.transaksi');
    })->name('transaksi');

    // Stock Reports
    Route::get('/laporan-stok', function () {
        return view('pages.laporan-stok');
    })->name('laporan-stok');

    // Transaction Reports
    Route::get('/laporan-transaksi', function () {
        return view('pages.laporan-transaksi');
    })->name('laporan-transaksi');

    // User Management - Only for Owner and Store Manager
    Route::get('/kelola-user', function () {
        return view('pages.kelola-user');
    })->name('kelola-user')->middleware('can:view users');
});
