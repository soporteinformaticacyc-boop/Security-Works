<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\CursoController;

// Ruta Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas de las páginas internas (Debes crear los archivos .blade.php para cada una)
Route::get('/noticias', function () {
    return view('noticias'); })->name('noticias');
Route::get('/cursos', function () {
    return view('cursos'); })->name('cursos');
Route::get('/certificacion-os10', function () {
    return view('certificacion'); })->name('certificacion');
Route::get('/inscribete', function () {
    return view('inscribete'); })->name('inscribete');
Route::get('/contacto', function () {
    return view('contacto'); })->name('contacto');
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
Route::post('/cursos/solicitud', [CursoController::class, 'enviarSolicitudCurso'])->name('cursos.solicitud');

Route::get('/areas/{categoria}', function ($categoria) {

    // 1. Convertimos lo que llega en la URL a "slug" (ej: "Minería y Construcción" -> "mineria-y-construccion")
    $slug = Str::slug($categoria);

    // 2. CREAMOS UN "MAPA" para conectar la URL con el nombre de TU archivo .blade
    // [ 'lo-que-sale-en-url' => 'nombre-de-tu-archivo-blade' ]
    $vistas = [
        'ofimatica' => 'cursosofimatica',
        'salud' => 'cursossalud',
        'negocios' => 'cursosnegocios',
        'educacion' => 'cursoseducacion',
        'mineria-y-construccion' => 'cursosmineria',      // Tú decides el nombre del archivo
        'calidad-y-alimentacion' => 'cursoscalidad',
        'electricidad-e-industrias' => 'cursoselectricidad',
        'prevencion-de-riesgos' => 'cursosprevencion',
        'finanzas-y-gestion' => 'cursosfinanzas',
    ];

    // 3. Verificamos si existe el área en nuestro mapa
    if (array_key_exists($slug, $vistas)) {
        // Si existe, cargamos el archivo correspondiente
        return view($vistas[$slug]);
    }

    // 4. Si escriben una url que no existe (ej: /areas/astronaura), damos error 404
    abort(404);

})->name('areas');