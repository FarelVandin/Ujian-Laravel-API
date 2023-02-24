<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LogC;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\UserC;
use App\Http\Controllers\ProductC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionC;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/log', [LogC::class, 'index']);
Route::get('/log/{id}', [LogC::class, 'detail']);

Route::get('/products', [ProductC::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/products/{id}', [ProductC::class, 'detail'])->middleware(['auth:sanctum']);

Route::get('/transactions', [TransactionC::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/transactions/{id}', [TransactionC::class, 'detail'])->middleware(['auth:sanctum']);

Route::get('/user', [UserC::class, 'index']);
Route::get('/user/{id}', [UserC::class, 'detail']);

Route::post('/login', [AuthC::class, 'login']);

Route::get('/admin',function(){
    return Hash::make('admin');
});

Route::get('/kasir',function(){
    return Hash::make('kasir');
});

Route::get('/owner',function(){
    return Hash::make('owner');
});