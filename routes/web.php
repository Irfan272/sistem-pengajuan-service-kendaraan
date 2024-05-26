<?php

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

// Route Dashboard
//Route::get('/'), [DashboardController::class, 'index'];
Route::get('/', function () {
});
// End Dashboard

// Route User
Route::get('/akun', function () {
    return view('admin.master_data.user.index');
});
// End User


// Route Mesin
Route::get('/barang', function () {
    return view('admin.master_data.mesin.index');
});
// End Mesin


// Route Service
Route::get('/service', function () {
    return view('admin.master_data.service.index');
});

// End Service


// Route Cost
Route::get('/biaya', function () {
    return view('admin.master_data.cost.index');
});

// End Cost
