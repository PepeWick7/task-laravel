<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [TodosController::class, 'index'])->name('todos');

Route::post('/task', [TodosController::class, 'store'])->name('todos');

Route::get('/task/{id}', [TodosController::class, 'show'])->name('todos-show');

Route::patch('/task/{id}', [TodosController::class, 'update'])->name('todos-update');

Route::delete('/task/{id}', [TodosController::class, 'destroy'])->name('todos-destroy');

Route::resource('categories', CategoriesController::class);
