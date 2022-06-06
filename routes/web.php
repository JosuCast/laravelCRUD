<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;


Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/estudiantes', [EstudiantesController::class,'index'])
    ->name('estudiantes.index');

Route::get('/estudiantes/create', [EstudiantesController::class,'create'])
    ->name('estudiantes.create');

Route::post('/estudiantes/create', [EstudiantesController::class,'store'])
    ->name('estudiantes.store');

Route::resource('estudiantes', EstudiantesController::class);