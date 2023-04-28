<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Departametno
Route::get('categorias/departamentos', [App\Http\Controllers\DepartmentController::class, 'index']);
Route::get('categorias/departamentos/create', [App\Http\Controllers\DepartmentController::class, 'create']);
Route::get('categorias/departamentos/{department}/edit', [App\Http\Controllers\DepartmentController::class, 'edit']);
Route::post('categorias/departamentos', [App\Http\Controllers\DepartmentController::class, 'sendData']);

//Rutas Municipios
Route::get('categorias/municipios', [App\Http\Controllers\MunicipalityController::class, 'index']);
Route::get('categorias/municipios/create', [App\Http\Controllers\MunicipalityController::class, 'create']);
Route::get('categorias/municipios/{municipality}/edit', [App\Http\Controllers\MunicipalityController::class, 'edit']);
Route::post('categorias/municipios', [App\Http\Controllers\MunicipalityController::class, 'sendData']);


//dckr_pat_gf3EN9emv9L4JLYJCukaaut-gfM
