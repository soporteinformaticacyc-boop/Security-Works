{{-- resources/views/cursos.blade.php --}}
@extends('layouts.app')

@section('title', 'Cursos de Seguridad')

@section('content')

    {{-- Estilos generales para las tarjetas de cursos --}}
    <style>
        .curso-card {
            max-width: 1100px;
            margin: 0 auto 2rem auto;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.08);
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .curso-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 20px;
            border: 1px solid rgba(226, 232, 240, 0.9);
            pointer-events: none;
        }

        .curso-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 45px rgba(15, 23, 42, 0.14);
        }

        .curso-card-media {
            flex: 0 0 38%;
            min-width: 260px;
            position: relative;
        }

        .curso-card-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .curso-tag {
            position: absolute;
            left: 1rem;
            top: 1rem;
            background: rgba(15, 23, 42, 0.88);
            color: #fff;
            padding: .25rem .7rem;
            border-radius: 999px;
            font-size: .7rem;
            text-transform: uppercase;
            letter-spacing: .08em;
        }

        .curso-card-body {
            flex: 1;
            padding: 1.8rem 2.2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .curso-meta {
            font-size: .8rem;
            text-transform: uppercase;
            letter-spacing: .12em;
            color: #9ca3af;
        }

        .curso-title {
            font-size: 1.15rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .06em;
        }

        .curso-resumen {
            font-size: .95rem;
            color: #4b5563;
        }

        .curso-badges span {
            display: inline-block;
            font-size: .78rem;
            border-radius: 999px;
            padding: .18rem .7rem;
            background: #f3f4f6;
            margin-right: .35rem;
            margin-bottom: .25rem;
            color: #4b5563;
        }

        .curso-cta {
            margin-top: 1.2rem;
        }

        .curso-cta .btn {
            border-radius: 999px;
            padding: .45rem 1.6rem;
        }

        @media (max-width: 768px) {
            .curso-card {
                margin-inline: 1rem;
            }

            .curso-card-body {
                padding: 1.25rem 1.4rem;
            }
        }
    </style>

    {{-- Breadcrumb + título --}}
    <section class="py-4 bg-light border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cursos</li>
                </ol>
            </nav>

            <h1 class="display-5 fw-bold text-center mb-0">
                Selecciona el curso que Buscas
            </h1>
        </div>
    </section>

    {{-- ===========================
         Formación de Guardias OS10
       =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img
                        src="{{ asset('img/cursos/curso os10.jpg') }}"
                        alt="Formación de Guardias OS10"
                    >
                    <span class="curso-tag">Curso OS10</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Seguridad privada · Nivel inicial
                        </div>

                        <h2 class="curso-title mb-2">
                            Formación de Guardias OS10
                        </h2>

                        <p class="curso-resumen mb-3">
                            El objetivo del curso es entregar al alumno conocimientos y herramientas sobre
                            técnicas de seguridad privada, fundamentales para responder con certeza y
                            oportunidad ante eventos relacionados con la seguridad que puedan afectar a los
                            copropietarios de alguna comunidad o institución, y a sus activos.
                        </p>

                        <p class="curso-resumen mb-3">
                            Dirigido a personas que quieran trabajar como guardias de seguridad, nochero,
                            rondines u otros de similar carácter por los efectos del D.S. 93, en
                            condominios habitacionales, comerciales, empresas y eventos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: 90 hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación OS10</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button"
                                class="btn btn-danger fw-semibold btn-curso-info"
                                data-curso="Formación de Guardias OS10">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
         Reentrenamiento de Guardias OS10
       =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img
                        src="{{ asset('img/cursos/Reentrenamiento de Guardias OS10.jpg') }}"
                        alt="Reentrenamiento de Guardias OS10"
                    >
                    <span class="curso-tag">Actualización OS10</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Seguridad privada · Nivel intermedio
                        </div>

                        <h2 class="curso-title mb-2">
                            Reentrenamiento de Guardias OS10
                        </h2>

                        <p class="curso-resumen mb-3">
                            Curso orientado a reforzar conocimientos y habilidades de los guardias
                            acreditados OS10, actualizando contenidos de acuerdo a la normativa y
                            buenas prácticas vigentes.
                        </p>

                        <p class="curso-resumen mb-3">
                            Ideal para guardias que deben renovar credencial y empresas que desean
                            mantener al día la capacitación de su personal.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: 40 hrs</span>
                            <span>Renovación OS10</span>
                            <span>Orientado a empresas</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Programa ideal para mantener tus credenciales vigentes.
                        </small>

                        <button type="button"
                                class="btn btn-danger fw-semibold btn-curso-info"
                                data-curso="Reentrenamiento de Guardias OS10">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
         Vigilante Privado
       =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img
                        src="{{ asset('img/cursos/Vigilante Privado.jpg') }}"
                        alt="Vigilante Privado"
                    >
                    <span class="curso-tag">Vigilancia Privada</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Operaciones de seguridad · Nivel avanzado
                        </div>

                        <h2 class="curso-title mb-2">
                            Vigilante Privado
                        </h2>

                        <p class="curso-resumen mb-3">
                            Programa de formación para personal que desempeña funciones de
                            vigilancia privada en bancos, instituciones financieras y otras
                            instalaciones de alto riesgo.
                        </p>

                        <p class="curso-resumen mb-3">
                            Incluye manejo de protocolos de seguridad, análisis de riesgo
                            y trabajo coordinado con fuerzas de orden.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Protección de activos críticos</span>
                            <span>Protocolos y análisis de riesgo</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Diseñado para perfiles que requieren alto estándar de seguridad.
                        </small>

                        <button type="button"
                                class="btn btn-danger fw-semibold btn-curso-info"
                                data-curso="Vigilante Privado">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
         Conserje y Mayordomo
       =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img
                        src="{{ asset('img/cursos/conserje y mayordomo.jpg') }}"
                        alt="Conserje y Mayordomo"
                    >
                    <span class="curso-tag">Atención y Seguridad</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Condominios y edificios · Nivel intermedio
                        </div>

                        <h2 class="curso-title mb-2">
                            Conserje y Mayordomo
                        </h2>

                        <p class="curso-resumen mb-3">
                            Capacitación en seguridad integral para conserjes y mayordomos de
                            edificios y condominios, enfocado en la prevención de riesgos,
                            control de accesos y atención a residentes.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Seguridad en condominios</span>
                            <span>Atención a residentes</span>
                            <span>Control de accesos</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Mejora la experiencia y seguridad en tu comunidad.
                        </small>

                        <button type="button"
                                class="btn btn-danger fw-semibold btn-curso-info"
                                data-curso="Conserje y Mayordomo">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
         Curso CCTV
       =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img
                        src="{{ asset('img/cursos/Curso CCTV.jpg') }}"
                        alt="Curso CCTV"
                    >
                    <span class="curso-tag">Tecnología y Monitoreo</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Sistemas electrónicos · Nivel técnico
                        </div>

                        <h2 class="curso-title mb-2">
                            Curso CCTV
                        </h2>

                        <p class="curso-resumen mb-3">
                            Formación para operadores de Sistemas de Seguridad CCTV,
                            control de accesos y alarmas, con foco en el uso eficiente de
                            la tecnología disponible.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Operación de sistemas CCTV</span>
                            <span>Monitoreo y alarmas</span>
                            <span>Control de accesos</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para salas de monitoreo y centros de control.
                        </small>

                        <button type="button"
                                class="btn btn-danger fw-semibold btn-curso-info"
                                data-curso="Curso CCTV">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ======================
         FORMULARIO DE CONTACTO
       ====================== --}}
    <section id="form-curso" class="py-5 form-curso-bg">
        <style>
            .form-curso-bg {
                background: #f4f5f7;
            }

            .form-curso-card {
                border-radius: 1.5rem;
            }

            .form-curso-aside {
                background: linear-gradient(135deg, #c0161c, #ff4545);
                color: #fff;
            }

            .form-curso-aside h2 {
                font-size: 1.35rem;
                letter-spacing: .04em;
            }

            .form-curso-aside p {
                opacity: .9;
            }

            .form-curso-badge {
                display: inline-block;
                padding: .25rem .75rem;
                border-radius: 999px;
                background: rgba(255, 255, 255, .1);
                font-size: .8rem;
                text-transform: uppercase;
                letter-spacing: .1em;
            }

            .form-curso-list li {
                margin-bottom: .35rem;
            }

            .form-curso-label {
                font-size: .85rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: .08em;
            }
        </style>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">

                    <div class="row g-0 shadow-lg bg-white form-curso-card overflow-hidden">
                        {{-- Lado izquierdo: info comercial --}}
                        <div class="col-md-4 form-curso-aside d-flex flex-column justify-content-between p-4 p-md-4">
                            <div>
                                <span class="form-curso-badge mb-3 d-inline-block">
                                    Información de cursos
                                </span>

                                <h2 class="mb-3 text-uppercase fw-bold">
                                    Conversemos sobre tu próxima capacitación
                                </h2>

                                <p class="mb-3">
                                    Cuéntanos en qué curso estás interesado y un ejecutivo de
                                    <strong>Security Work</strong> te contactará con fechas, valores
                                    y modalidad disponible.
                                </p>

                                <ul class="form-curso-list ps-3 mb-0">
                                    <li>Programas acreditados y alineados a normativa OS10.</li>
                                    <li>Capacitaciones para personas y empresas.</li>
                                    <li>Clases teóricas y prácticas con instructores expertos.</li>
                                </ul>
                            </div>

                            <div class="mt-4 small">
                                <div class="fw-semibold">Contacto directo</div>
                                <div>Teléfono: +56 2 0000 0000</div>
                                <div>Correo: <span class="fw-semibold">contacto@securitywork.cl</span></div>
                            </div>
                        </div>

                        {{-- Lado derecho: formulario --}}
                        <div class="col-md-8">
                            <style>
                                .form-curso-form {
                                    background: #ffffff;
                                    height: 100%;
                                }

                                .form-curso-form h3 {
                                    font-size: 1.25rem;
                                }

                                .form-curso-label {
                                    font-size: .82rem;
                                    font-weight: 600;
                                    text-transform: uppercase;
                                    letter-spacing: .1em;
                                    color: #6c757d;
                                }

                                .form-curso-field {
                                    border-radius: .75rem;
                                    border: 1px solid #e0e3eb;
                                    padding: 0.65rem 0.9rem;
                                    font-size: .95rem;
                                }

                                .form-curso-field:focus {
                                    border-color: #c0161c;
                                    box-shadow: 0 0 0 0.15rem rgba(192, 22, 28, 0.20);
                                }

                                .form-curso-help {
                                    font-size: .78rem;
                                    color: #9ca3af;
                                }

                                .form-curso-divider {
                                    border-top: 1px dashed #e0e3eb;
                                    margin: 1.2rem 0;
                                }
                            </style>

                            <div class="form-curso-form p-4 p-md-5">
                                <h3 class="h4 fw-bold mb-2">
                                    Solicita más información de un curso
                                </h3>
                                <p class="text-muted mb-4">
                                    Completa el formulario y te responderemos a la brevedad con los detalles del curso,
                                    horarios, valores y requisitos.
                                </p>

                                {{-- Mensaje de éxito opcional --}}
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('cursos.solicitud') }}">
                                    @csrf

                                    <div class="row g-3">
                                        {{-- Nombre --}}
                                        <div class="col-md-6">
                                            <label class="form-curso-label mb-1">Nombre completo</label>
                                            <input type="text"
                                                   name="nombre"
                                                   class="form-control form-curso-field"
                                                   placeholder="Ej: Juan Pérez"
                                                   required>
                                            <div class="form-curso-help">
                                                Persona de contacto principal.
                                            </div>
                                        </div>

                                        {{-- Correo --}}
                                        <div class="col-md-6">
                                            <label class="form-curso-label mb-1">Correo electrónico</label>
                                            <input type="email"
                                                   name="correo"
                                                   class="form-control form-curso-field"
                                                   placeholder="correo@ejemplo.cl"
                                                   required>
                                            <div class="form-curso-help">
                                                Donde enviaremos la información del curso.
                                            </div>
                                        </div>

                                        {{-- Teléfono --}}
                                        <div class="col-md-6">
                                            <label class="form-curso-label mb-1">Teléfono</label>
                                            <input type="text"
                                                   name="telefono"
                                                   class="form-control form-curso-field"
                                                   placeholder="+56 9 1234 5678">
                                            <div class="form-curso-help">
                                                Opcional, para coordinar vía llamada o WhatsApp.
                                            </div>
                                        </div>

                                        {{-- Curso de interés --}}
                                        <div class="col-md-6">
                                            <label class="form-curso-label mb-1">Curso de interés</label>
                                            <input type="text"
                                                   id="curso_interes"
                                                   name="curso_interes"
                                                   class="form-control form-curso-field"
                                                   placeholder="Ej: Formación de Guardias OS10"
                                                   required>
                                            <div class="form-curso-help">
                                                Se completa automáticamente al elegir “Más información”.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-curso-divider"></div>

                                    {{-- Mensaje --}}
                                    <div class="mb-3">
                                        <label class="form-curso-label mb-1">Mensaje / Detalles</label>
                                        <textarea name="mensaje"
                                                  rows="4"
                                                  class="form-control form-curso-field"
                                                  placeholder="Indica fechas tentativas, número de participantes, modalidad (presencial/online), requerimientos especiales, etc."></textarea>
                                    </div>

                                    <div class="mt-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between">
                                        <p class="text-muted form-curso-help mb-3 mb-sm-0">
                                            Al enviar este formulario, autorizas a Security Work a contactarte para
                                            entregarte información sobre sus cursos de capacitación.
                                        </p>
                                        <button type="submit" class="btn btn-danger px-5">
                                            Enviar solicitud
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div> {{-- /col-md-8 --}}
                    </div> {{-- /row g-0 --}}
                </div> {{-- /col-xl-10 --}}
            </div> {{-- /row justify-content-center --}}
        </div> {{-- /container --}}
    </section>

    {{-- Script para rellenar el curso y hacer scroll suave al formulario --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.btn-curso-info');
            const cursoInput = document.getElementById('curso_interes');
            const formSection = document.getElementById('form-curso');

            buttons.forEach(btn => {
                btn.addEventListener('click', function () {
                    const nombreCurso = this.dataset.curso || '';

                    if (cursoInput) {
                        cursoInput.value = nombreCurso;
                        cursoInput.focus();
                    }

                    if (formSection) {
                        formSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });
        });
    </script>

@endsection
