<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DebtController;

Route::middleware('guest')->get('/', [PageController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('debt', [DebtController::class, 'index'])->name('debt.index');
    Route::get('debt/create/', [DebtController::class, 'create'])->name('debt.create');
    Route::post('debt/create/', [DebtController::class, 'store'])->name('debt.store');

    Route::middleware('can:view,debt')->get('debt/{debt}/', [DebtController::class, 'show'])->name('debt.show');
    Route::middleware('can:update,debt')->get('debt/{debt}/update', [DebtController::class, 'edit'])->name('debt.edit');
    Route::middleware('can:update,debt')->put('debt/{debt}/update', [DebtController::class, 'update'])->name('debt.update');
    Route::middleware('can:delete,debt')->delete('debt/{debt}/delete', [DebtController::class, 'destroy'])->name('debt.destroy');

    Route::middleware('can:delete,debt')->get('debt/{debt}/delete', [DebtController::class, 'delete'])->name('debt.delete');
    Route::middleware('can:update,debt')->put('debt/{debt}/increase', [DebtController::class, 'increase'])->name('debt.increase');
    Route::middleware('can:update,debt')->put('debt/{debt}/pay', [DebtController::class, 'pay'])->name('debt.pay');
});
