<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/areas/{categoria?}', function ($categoria = null) {
    // Datos de las nuevas áreas
    $todasLasAreas = [
        'Ofimática' => ['Excel', 'Word', 'Power BI', 'Ciberseguridad'],
        'Salud' => ['Primeros Auxilios', 'RCP', 'Asistente Enfermería'],
        'Negocios' => ['Liderazgo', 'Marketing', 'Ventas'],
        'Educación' => ['Inspector', 'Asistente Párvulos'],
        'Minería' => ['Trabajo en Altura', 'Puente Grúa'],
        'Industria' => ['Electricidad', 'Soldadura'],
    ];

    $titulo = "Áreas de Capacitación";
    $cursosMostrar = $todasLasAreas;

    if ($categoria) {
        $filtrado = array_filter($todasLasAreas, function($key) use ($categoria) {
            return Str::slug($key) === Str::slug($categoria);
        }, ARRAY_FILTER_USE_KEY);

        if (!empty($filtrado)) {
            $cursosMostrar = $filtrado;
            $titulo = "Cursos de " . array_key_first($filtrado);
        }
    }

    return view('areas', compact('cursosMostrar', 'titulo'));
})->name('areas');