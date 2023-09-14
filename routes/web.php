<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('layout.master');
});

// CRUD 21312041 MAHASISWA
Route::get('/21312041', [UasController::class,'index']);
Route::get('/21312041/create', [UasController::class,'create']);
Route::post('/21312041', [UasController::class,'store']);
Route::get('/21312041/{21312041_id}/edit', [UasController::class,'edit']);
Route::put('/21312041/{21312041_id}', [UasController::class,'update']);
Route::delete('/21312041/{21312041_id}', [UasController::class,'destroy']);

