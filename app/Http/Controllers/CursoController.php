<?php

namespace App\Http\Controllers;

use App\Mail\CursoSolicitudMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CursoController extends Controller
{
    public function enviarSolicitudCurso(Request $request)
    {
        $data = $request->validate([
            'nombre'        => 'required|string|max:255',
            'correo'        => 'required|email',
            'telefono'      => 'nullable|string|max:50',
            'curso_interes' => 'required|string|max:255',
            'mensaje'       => 'nullable|string',
        ]);

        // Cambia este correo por el correo real donde quieres recibir las solicitudes
        $correoDestino = 'contacto@securitywork.cl';

        Mail::to($correoDestino)->send(new CursoSolicitudMail($data));

        return back()->with('status', 'Tu solicitud fue enviada correctamente. Nos contactaremos contigo a la brevedad.');
    }
}