<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud\EmployeeController;



Route::get('/', [EmployeeController::class, 'index']);
Route::get('/create', [EmployeeController::class, 'create'])->name('create');
Route::post('/create', [EmployeeController::class, 'store'])->name('store');
Route::get('/create/{employee}', [EmployeeController::class, 'show'])->name('show');
Route::get('/create/{employee}/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::patch('/create/{employee}', [EmployeeController::class, 'update'])->name('update');
Route::delete('/create/{employee}', [EmployeeController::class, 'destroy'])->name('destroy');

// Create migration files to create Employee and Company schema
// • Use database seeds to create companies at least 5
// • CRUD functionality for Employee (should belong to a Company)
// • One-to-many relationship between employee and company. So a Company can have many
// employees
