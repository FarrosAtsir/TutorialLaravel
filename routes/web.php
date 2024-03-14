<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiswaController::class, 'index']);
Route::get('/add', [SiswaController::class, 'add']);
Route::post('/store', [SiswaController::class, 'create']);
Route::get('/{id}/edit', [SiswaController::class, 'edit']);
Route::put('/update/{id}', [SiswaController::class, 'update']);
Route::delete('/update/{id}', [SiswaController::class, 'destroy']);