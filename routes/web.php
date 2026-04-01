<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.layoutAdminPanel');
// });

Route::get('/', function () {
    return view('pages.dashboard');
});
