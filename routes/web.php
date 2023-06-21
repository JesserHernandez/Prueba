<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Marcas', \App\Http\Controllers\BrandController::class);
Route::resource('Configuracion', \App\Http\Controllers\ConfigurationController::class);
Route::resource('Clientes', \App\Http\Controllers\CustomerController::class);
Route::resource('Empleados', \App\Http\Controllers\EmployeeController::class);
Route::resource('Facturas', \App\Http\Controllers\InvoicesaleController::class);
Route::resource('MedicamentoBaja', \App\Http\Controllers\MedicationlowController::class);
Route::resource('Medicamentos', \App\Http\Controllers\MedicineController::class);
Route::resource('Pedidos', \App\Http\Controllers\OrderController::class);
Route::resource('Compras', \App\Http\Controllers\PurchaseController::class);
Route::resource('Ventas', \App\Http\Controllers\SaleController::class);
Route::resource('Provedores', \App\Http\Controllers\SupplierController::class);
Route::resource('TipoMedicamentos', \App\Http\Controllers\TypemedicineController::class);
Route::resource('TipoMedicamentoVentas', \App\Http\Controllers\TypemedicinesaleController::class);
Route::resource('Laboratorios', \App\Http\Controllers\LaboratoryController::class);
