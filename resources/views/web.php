<?php

use App\Http\Controllers\DeliveryChallanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MdcController;
use App\Http\Controllers\WccController;
use App\Http\Controllers\PoController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('index');
});

Route::get('/13sqft/13sqft-dashboard', [DashboardController::class, 'index'])->name('13sqft-dashboard');


// MdcController

Route::get('/13sqft/13sqft-mdc', [MdcController::class, 'index'])->name('13sqft-mdc');

Route::get('/13sqft/13sqft-mdc-add', function () {return view('13sqft-mdc-add');});

Route::post('13sqft/13sqft-mdc-add-item', [MdcController::class, 'addItems'])->name('13sqft-mdc-add-item');

Route::get('/13sqft/13sqft-mdc-edit/{id}', [MDCController::class, 'edit'])->name('13sqft-mdc-edit');

Route::delete('13sqft/13sqft-mdc-delete/{id}', [MDCController::class, 'delete'])->name('13sqft-mdc-dashboard');

Route::delete('/13sqft/13sqft-mdc-item-delete/{id}', [MDCController::class, 'deleteitem'])->name('13sqft-mdc-dashboard');

Route::post('13sqft-mdc-updateitems', [MDCController::class, 'updateItems'])->name('13sqft-mdc-updateitems');


Route::get('/13sqft/13sqft-mdc-pdf', function () {
    return view('13sqft-mdc-pdf');
});

Route::get('/13sqft-mdc/add', [MdcController::class, 'create'])->name('mdc.create');

// WccController

Route::get('13sqft/13sqft-wcc', [WccController::class, 'index'])->name('13sqft-wcc');

Route::get('13sqft/13sqft-wcc-add', function () {
    return view('13sqft-wcc-add');
});
Route::get('/13sqft/13sqft-wcc-pdf', function () {
    return view('13sqft-wcc-pdf');
});
Route::post('wcc/store', [WccController::class, 'store'])->name('wcc.store');
// PoController
Route::get('/13sqft/13sqft-po', [PoController::class, 'index'])->name('13sqft-po');

Route::get('13sqft/13sqft-po-add', function () {
    return view('13sqft-po-add');
});
Route::get('/13sqft/13sqft-po-pdf', function () {
    return view('13sqft-po-pdf');
});
Route::post('/purchase-order/store', [PoController::class, 'store'])->name('purchase-order.store');

// DeliveryChallanController
Route::get('/13sqft/13sqft-delivery-challan', [DeliveryChallanController::class, 'index'])->name('13sqft-delivery-challan');


Route::get('13sqft/13sqft-delivery-challan-add', function () {
    return view('13sqft-delivery-challan-add');
});
Route::get('/13sqft/13sqft-delivery-challan-pdf', function () {
    return view('13sqft-delivery-challan-pdf');
});





Route::middleware(['auth'])->group(function () {
    Route::get('purchase-orders/create', [PurchaseOrderController::class, 'create'])
        ->name('purchase-orders.create');

    Route::post('purchase-orders/search', [PurchaseOrderController::class, 'search'])
        ->name('purchase-orders.search');

    Route::post('delivery-challans', [PurchaseOrderController::class, 'store'])
        ->name('delivery-challans.store');
});
