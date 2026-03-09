<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseTypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('expense-types', ExpenseTypeController::class)
    ->only(['index','create','store','edit','update','destroy']);
