<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

//Ruta para devolver todos los registros
Route::get('/all', [MoviesController::class, 'index']);

//Ruta para devolver un registro especifico
Route::get('/movie/{id}', [MoviesController::class, 'movie']);

//Ruta para insertar un registro
Route::post('/new-movie', [MoviesController::class, 'newMovie']);

//Ruta para actualizar un registro
Route::put('/update/{id}', [MoviesController::class, 'updateMovie']);

//Ruta para eliminar un registro
Route::delete('/delete/{id}', [MoviesController::class, 'deleteMovie']);