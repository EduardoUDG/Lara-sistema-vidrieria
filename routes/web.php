<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SeguroController;
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
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home');



Route::resource('roles', RoleController::class)->parameters(['roles' => 'role'])->names('roles');

Route::resource('seguros', SeguroController::class)->parameters(['seguros' => 'seguro'])->names('seguros');

Route::resource('empleados', EmpleadoController::class)->parameters(['empleados' => 'empleado'])->names('empleados');
