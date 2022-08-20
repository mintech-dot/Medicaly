<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\DashboardappoiController;

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

Route::get('/joinus', function () {
    return view('joinus');
});

Route::get('/orders', function () {
    return view('order');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboardappoin', function () {
    return view('dashboardappoin');
});

Route::get('/done', function () {
    return view('done');
});

Route::get('/process', function () {
    return view('process');
});


Route::post('/joinus/store', [JoinusController::class , 'store']);
Route::post('/process', [JoinusController::class , 'index']);

Route::post('/orders/store', [OrdersController::class , 'store']);
Route::post('/done', [OrdersController::class , 'index']);


Route::get('/dashboard', [DashboardController::class , 'index']);
Route::get('/dashboard/edit/{id}', [DashboardController::class , 'edit']);
Route::post('/dashboard/update', [DashboardController::class , 'update']);
Route::get('/dashboard/delete/{id}', [DashboardController::class , 'destroy']);



Route::get('/dashboardappoin', [DashboardappoiController::class , 'index']);
Route::get('/dashboardappoin/edit/{id}', [DashboardappoiController::class , 'edit']);
Route::post('/dashboardappoin/update', [DashboardappoiController::class , 'update']);
Route::get('/dashboardappoin/delete/{id}', [DashboardappoiController::class , 'destroy']);

Route::get('/', [DashboardController::class , 'create']);
