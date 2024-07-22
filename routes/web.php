<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/income', [App\Http\Controllers\IncomeController::class, 'index'])->name('income.index');
Route::get('/income/create', [App\Http\Controllers\IncomeController::class, 'create'])->name('income.create');
Route::post('/income/store', [App\Http\Controllers\IncomeController::class, 'store'])->name('income.store');

Route::get('/investment', [App\Http\Controllers\InvestmentController::class, 'index'])->name('investment.index');
Route::get('/investment/create', [App\Http\Controllers\InvestmentController::class, 'create'])->name('investment.create');
Route::post('/investment/store', [App\Http\Controllers\InvestmentController::class, 'store'])->name('investment.store');

Route::get('/expenses', [App\Http\Controllers\ExpensesController::class, 'index'])->name('expenses.index');
Route::get('/expenses/create', [App\Http\Controllers\ExpensesController::class, 'create'])->name('expenses.create');
Route::post('/expenses/store', [App\Http\Controllers\ExpensesController::class, 'store'])->name('expenses.store');

