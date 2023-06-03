<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/test', [TestController::class, 'getAllData']);
Route::get('/test/{id}', [TestController::class, 'getData']);
Route::post('/test', [TestController::class, 'saveData']);

Route::get('/testStatic', [TestController::class, 'static']);
