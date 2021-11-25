<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SeguroController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SucursalController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::resource('roles', RoleController::class)->parameters(['roles' => 'role'])->names('roles');

Route::resource('seguros', SeguroController::class)->parameters(['seguros' => 'seguro'])->names('seguros');

Route::resource('empleados', EmpleadoController::class)->parameters(['empleados' => 'empleado'])->names('empleados');

Route::resource('clientes', ClienteController::class)->parameters(['clientes' => 'cliente'])->names('clientes');

Route::resource('productos', ProductoController::class)->parameters(['productos' => 'producto'])->names('productos');

Route::resource('stores', StoreController::class)->parameters(['stores' => 'store'])->names('stores');
