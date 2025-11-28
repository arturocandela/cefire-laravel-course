<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/employees/by-id', [EmployeeController::class, 'byId'])->name('employees.byId');
Route::get('/employees/by-lastname', [EmployeeController::class, 'byLastName'])->name('employees.byLastName');
Route::get('/employees/filter-letter', [EmployeeController::class, 'lastNameStartsWith'])->name('employees.lastNameStartsWith');
Route::get('/employees/filter-year', [EmployeeController::class, 'bornIn'])->name('employees.bornIn');
