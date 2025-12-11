<?php

use Illuminate\Support\Facades\Route;

// Ruta Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas de las páginas internas (Debes crear los archivos .blade.php para cada una)
Route::get('/noticias', function () { return view('noticias'); })->name('noticias');
Route::get('/cursos', function () { return view('cursos'); })->name('cursos');
Route::get('/areas', function () { return view('areas'); })->name('areas');
Route::get('/certificacion-os10', function () { return view('certificacion'); })->name('certificacion');
Route::get('/inscribete', function () { return view('inscribete'); })->name('inscribete');
Route::get('/contacto', function () { return view('contacto'); })->name('contacto');
Route::get('/nosotros', function () {return view('nosotros');
})->name('nosotros');
Route::post('/cursos/solicitud', [CursoController::class, 'enviarSolicitudCurso'])->name('cursos.solicitud');