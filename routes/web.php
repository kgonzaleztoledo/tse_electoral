<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
//dd(welcome);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Categorias
Route::get('categorias', [App\Http\Controllers\CategoryController::class, 'index']);
//Route::get('categorias/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::get('categorias/departamentos/{department}/edit', [App\Http\Controllers\CategoryController::class, 'editDepartment']);
Route::put('categorias/departamentos/{department}', [App\Http\Controllers\CategoryController::class, 'updateDepartment']);
Route::post('categorias/departamentos', [App\Http\Controllers\CategoryController::class, 'sendDataDepartment']);
Route::post('categorias', [App\Http\Controllers\CategoryController::class, 'sendDataMunicipality']);
Route::post('categorias', [App\Http\Controllers\CategoryController::class, 'sendDataIdentity']);
Route::post('categorias', [App\Http\Controllers\CategoryController::class, 'sendDataGender']);
Route::post('categorias', [App\Http\Controllers\CategoryController::class, 'sendDataLinguistic']);

//Rutas de Participantes

Route::get('participantes', [App\Http\Controllers\ParticipantController::class, 'index']);
Route::get('participantes/create', [App\Http\Controllers\ParticipantController::class, 'create']);

Route::post('participantes/dep', [App\Http\Controllers\CategoryController::class, 'sendData']);
Route::get('participantes/{id}/edit', [App\Http\Controllers\ParticipantController::class, 'edit'])->name('participantes.edit');
//Route::get('/participantes/show', [App\Http\Controllers\ParticipantController::class, 'show'])->name('participant.show');
Route::get('participantes/show/{id}', [App\Http\Controllers\ParticipantController::class, 'show'])->name('participantes.show');

Route::put('participantes/{participant}', [App\Http\Controllers\ParticipantController::class, 'updateParticipant']);

Route::post('participantes', [App\Http\Controllers\ParticipantController::class, 'sendData']);

/*Ruta para hacer reportes */
Route::get('reportes/participantes/line', [App\Http\Controllers\ChartController::class, 'appointments'])->name('reportes.appointments');


/*
//Rutas Municipios
//Route::get('categorias/municipios', [App\Http\Controllers\MunicipalityController::class, 'index']);
//Route::get('categorias/municipios/create', [App\Http\Controllers\MunicipalityController::class, 'create']);
Route::get('categorias/municipios/{municipality}/edit', [App\Http\Controllers\MunicipalityController::class, 'edit']);
Route::post('categorias/municipios', [App\Http\Controllers\MunicipalityController::class, 'sendData']);

//Rutas Identidades
Route::get('categorias/identidades', [App\Http\Controllers\IdentityController::class, 'index']);
Route::get('categorias/identidades/create', [App\Http\Controllers\IdentityController::class, 'create']);
Route::get('categorias/identidades/{identity}/edit', [App\Http\Controllers\IdentityController::class, 'edit']);
Route::post('categorias/identidades', [App\Http\Controllers\IdentityController::class, 'sendData']);

//Rutas Generos
Route::get('categorias/generos', [App\Http\Controllers\GenderController::class, 'index']);
Route::get('categorias/generos/create', [App\Http\Controllers\GenderController::class, 'create']);
Route::get('categorias/generos/{gender}/edit', [App\Http\Controllers\GenderController::class, 'edit']);
Route::post('categorias/generos', [App\Http\Controllers\GenderController::class, 'sendData']);

//Rutas Linguisticas
Route::get('categorias/linguisticas', [App\Http\Controllers\LinguisticController::class, 'index']);
Route::get('categorias/linguisticas/create', [App\Http\Controllers\LinguisticController::class, 'create']);
Route::get('categorias/linguisticas/{linguistic}/edit', [App\Http\Controllers\LinguisticController::class, 'edit']);
Route::post('categorias/linguisticas', [App\Http\Controllers\LinguisticController::class, 'sendData']);


//dckr_pat_gf3EN9emv9L4JLYJCukaaut-gfM
*/
