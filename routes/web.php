<?php

use App\Http\Controllers\ProductController;
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

Route::get('hasone',[ProductController::class,'hasone']);
Route::get('hasonemany',[ProductController::class,'hasmany']);
Route::get('manymany',[ProductController::class,'manymany']);

