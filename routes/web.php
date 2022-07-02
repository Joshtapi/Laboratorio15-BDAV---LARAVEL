<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

// Route::post('login', [PassportController::class, 'login']);

Route::get('add',[CarController::class, 'create']);
//Route::get('add','CarController@create');
Route::post('add',[CarController::class, 'store']);
Route::get('car',[CarController::class, 'index']);
Route::get('edit/{id}',[CarController::class, 'edit'])->name('edit');
Route::post('edit/{id}',[CarController::class, 'update'])->name('update');
Route::delete('{id}',[CarController::class, 'destroy'])->name('destroy');
