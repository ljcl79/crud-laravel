<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;
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
    return view('app');
});

//Lista de registros
Route::get('/empleados', [EmpleadoController::class,'index'])->name('empleados.index');

//Creación de registros
Route::get('/empleados/create', [EmpleadoController::class,'create'])->name('empleados.create');

//Insertar registros
Route::post('/empleados', [EmpleadoController::class,'store'])->name('empleados.store');

//Detalle de registros
Route::get('/empleados/{id}', [EmpleadoController::class,'show'])->name('empleados.show');

//Editar registros
Route::get('/empleados/edit/{id}', [EmpleadoController::class,'edit'])->name('empleados.edit');

//Actualizar registros
Route::put('/empleados/{id}', [EmpleadoController::class,'update'])->name('empleados.update');

//Borrar registros
Route::delete('/empleados/{id}', [EmpleadoController::class,'destroy'])->name('empleados.destroy');