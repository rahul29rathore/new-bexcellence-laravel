<?php

use App\Http\Controllers\BewareController;
use App\Http\Controllers\MdcController;
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

Route::get('/13sqft/13sqft-mdc-edit/{id}', [MDCController::class, 'edit'])->name('13sqft-mdc-edit');

Route::delete('13sqft/13sqft-mdc-delete/{id}', [MDCController::class, 'delete'])->name('13sqft-mdc-dashboard');

Route::delete('/13sqft/13sqft-mdc-item-delete/{id}', [MDCController::class, 'deleteitem'])->name('13sqft-mdc-dashboard');

Route::post('13sqft-mdc-updateitems', [MDCController::class, 'updateItems'])->name('13sqft-mdc-updateitems');

<<<<<<< HEAD
Route::get('/beware/beware-dashboard', [BewareController::class, 'index']);
=======
Route::get('/13sqft/13sqft-mdc-pdf/{id}', [MDCController::class, 'mdcPdfView'])->name('13sqft-mdc-pdf');
>>>>>>> 47e1de08745f55d11be2ec5d190d2df4fc9e7cfc

//Beware Controller

Route::get('/beware/beware-dashboard', [BewareController::class, 'index']);
