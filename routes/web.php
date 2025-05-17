<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/13sqft/13sqft-dashboard', [DashboardController::class, 'index'])->name('13sqft-dashboard');

Route::get('/bmi-dashboard', function () {
    return view('bmi-dashboard');
});


Route::get('/beware/beware-dashboard', [BewareController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
