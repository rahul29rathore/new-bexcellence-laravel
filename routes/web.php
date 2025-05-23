<?php

use App\Http\Controllers\BewareController;
use App\Http\Controllers\MdcController;
use App\Http\Controllers\WccController;
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

//MDC Controller
Route::get('/13sqft/13sqft-mdc', [MdcController::class, 'index'])->name('13sqft-mdc');

Route::get('/13sqft/13sqft-mdc-add', function () {
    return view('13sqft-mdc-add');
});

Route::post('13sqft/13sqft-mdc-add-item', [MdcController::class, 'addItems'])->name('13sqft-mdc-add-item');

Route::get('/13sqft/13sqft-mdc-edit/{id}', [MdcController::class, 'edit'])->name('13sqft-mdc-edit');

Route::delete('13sqft/13sqft-mdc-delete/{id}', [MdcController::class, 'delete'])->name('13sqft-mdc-dashboard');

Route::delete('/13sqft/13sqft-mdc-item-delete/{id}', [MdcController::class, 'deleteitem'])->name('13sqft-mdc-dashboard');

Route::post('13sqft-mdc-updateitems', [MdcController::class, 'updateItems'])->name('13sqft-mdc-updateitems');
Route::get('/13sqft/13sqft-mdc-pdf/{id}', [MdcController::class, 'mdcPdfView'])->name('13sqft-mdc-pdf');


//WCC Controller
Route::get('/13sqft/13sqft-wcc', [WccController::class, 'index'])->name('13sqft-wcc');

Route::get('/13sqft/13sqft-wcc-add', function () {return view('13sqft-wcc-add');});

Route::post('13sqft/13sqft-wcc-add-item', [WccController::class, 'addItems'])->name('13sqft-wcc-add-item');

Route::get('/13sqft/13sqft-wcc-edit/{id}', [WccController::class, 'edit'])->name('13sqft-wcc-edit');

Route::delete('13sqft/13sqft-wcc-delete/{id}', [WccController::class, 'delete'])->name('13sqft-wcc-dashboard');

Route::delete('/13sqft/13sqft-wcc-item-delete/{id}', [WccController::class, 'deleteitem'])->name('13sqft-wcc-dashboard');

Route::post('13sqft-wcc-updateitems', [WccController::class, 'updateItems'])->name('13sqft-wcc-updateitems');
Route::get('/13sqft/13sqft-wcc-pdf/{id}', [WccController::class, 'wccPdfView'])->name('13sqft-wcc-pdf');


//Beware Controller
Route::get('/beware/beware-dashboard', [BewareController::class, 'index']);
