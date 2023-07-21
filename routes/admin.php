<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ChildrenController;
use App\Http\Controllers\admin\PeriodController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\BillController;


Route::prefix('/admin')->name('admin.')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // User
    Route::resource('/user', UserController::class);
    // Children
    Route::resource('/children', ChildrenController::class);
    // Period
    Route::resource('/period', PeriodController::class);
    // Transaction
    Route::resource('/transaction', TransactionController::class);
    // Bill
    Route::resource('/bill', BillController::class);
});
