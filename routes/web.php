<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vehiculocontroller;
use App\Http\Controllers\UserController;
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


Route::get('vehiculos', [Vehiculocontroller::class, 'index'])->name('Vehiculo.index');
Route::get('vehiculos/create', [Vehiculocontroller::class, 'create'])->name('Vehiculo.create');
Route::post('vehiculos', [Vehiculocontroller::class, 'store'])->name('Vehiculo.store');
Route::get('vehiculos/{id}', [Vehiculocontroller::class, 'show'])->name('Vehiculo.show');
Route::delete('vehiculos/{id}', [Vehiculocontroller::class, 'destroy'])->name('Vehiculo.destroy');
Route::get('vehiculos/edit/{id}', [Vehiculocontroller::class, 'edit'])->name('Vehiculo.edit');
Route::put('vehiculos/{id}', [Vehiculocontroller::class, 'update'])->name('Vehiculo.update');
//////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('users',[UserController::class,'index'])->name('User.index');
Route::get('users/create',[UserController::class,'create'])->name('User.create');
Route::post('users',[UserController::class,'store'])->name('User.store');
Route::get('users/{id}',[UserController::class,'show'])->name('User.show');
Route::delete('users/{id}',[UserController::class,'destroy'])->name('User.destroy');
Route::get('users/edit/{id}',[UserController::class,'edit'])->name('User.edit');
Route::put('users/{id}',[UserController::class,'update'])->name('User.update');


