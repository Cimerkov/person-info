<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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



Route::match(['get', 'post'], '/', [PersonController::class, 'index']);
Route::get('/people/create', [PersonController::class, 'create']);
Route::post('/people', [PersonController::class, 'store'])->name('people.store');
Route::get('/people/{person}', [PersonController::class, 'show']);
Route::get('/people/{person}/edit', [PersonController::class, 'edit']);
Route::put('/people/{person}', [PersonController::class, 'update']);
Route::delete('/people/{person}', [PersonController::class, 'destroy']);