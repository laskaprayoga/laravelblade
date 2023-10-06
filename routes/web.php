<?php

use App\http\Controllers\castcontroller;
use Illuminate\Support\Facades\Route;



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
    return view('layouts.master');
});
 Route::get('/table', function (){
    return view('table');
 });
 Route::get('/datatables', function (){
    return view('data-table');
 });
 
 Route::get('/cast', [CastController::class, 'index']);

 Route::get('/cast/create', [CastController::class, 'create']);
 
 Route::post('/cast', [CastController::class, 'store']);
 
 Route::get('/cast/{id}', [CastController::class, 'show']);
 
 Route::get('/cast/update/{id}', [CastController::class, 'edit']);
 
 Route::post('/cast/update/{id}', [CastController::class, 'update']);
 
 Route::get('/cast/delete/{id}', [CastController::class, 'destroy']);

