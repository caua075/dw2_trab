<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/', [CarController::class, 'index']);

// create cars
Route::get('/cars/create', [CarController::class, 'create'])->middleware(['auth']);
Route::post('/cars', [CarController::class, 'store']);

Route::get('/cars/sample', [CarController::class, 'sample']);
Route::get('/cars/show/{id}', [CarController::class, 'show']);

Route::delete('/cars/{id}', [CarController::class, 'destroy'])->middleware(['auth']);
Route::get('/cars/edit/{id}', [CarController::class, 'edit'])->middleware();
Route::put('/cars/update/{id}', [CarController::class, 'update'])->middleware();


Route::get('/dashboard', [CarController::class, 'dashboard'])->middleware(['auth']);