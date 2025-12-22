{{-- resources/views/cursosofimatica.blade.php --}}
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
                </ol>
            </nav>

            <h1 class="display-5 fw-bold text-center mb-0">
                Selecciona el curso que Buscas
            </h1>
        </div>
    </section>

    {{-- ===========================
    Curso de Microsoft Office Excel
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/ofimatica/excel.jpg') }}" alt="excel">
                    <span class="curso-tag">Programa</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Nivel Basico, Intermedio y Avanzado
                        </div>

                        <h2 class="curso-title mb-2">
                            Microsoft Office Excel
                        </h2>

                        <p class="curso-resumen mb-3">
                            El objetivo del curso es entregar al alumno el dominio integral de las hojas de cálculo,
                            abarcando desde la introducción de datos hasta el análisis avanzado. Aprenderás a utilizar
                            fórmulas, crear tablas dinámicas y generar gráficos para automatizar tareas y optimizar la
                            gestión de información en entornos corporativos.
                        </p>

                        <p class="curso-resumen mb-3">
                            Dirigido a profesionales, administrativos, estudiantes y emprendedores que deseen potenciar su
                            perfil laboral, mejorar su productividad y facilitar la toma de decisiones mediante el uso
                            eficiente y profesional de una de las herramientas de Microsoft Office.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: ---</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info" data-curso="Excel">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Linux
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/ofimatica/linux.jpg') }}" alt="Linux">
                    <span class="curso-tag">Sistema operativo</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Manejo S.O · Nivel facíl
                        </div>

                        <h2 class="curso-title mb-2">
                            Manejo en el entorno de Linux
                        </h2>

                        <p class="curso-resumen mb-3">
                            Dirigido a Supervisores de Seguridad, Operadores de CCTV y Jefes de Operaciones que buscan
                            especializarse en Seguridad Electrónica. Dado que la mayoría de los servidores de
                            videovigilancia (NVR/DVR) y sistemas de control de acceso operan bajo base Linux, este curso
                            capacita al profesional para gestionar, configurar y auditar la infraestructura tecnológica que
                            respalda la protección física de las instalaciones.
                        </p>

                        <p class="curso-resumen mb-3">
                            Orientado a personal de seguridad privada y encargados de protección de activos que deseen
                            ampliar sus competencias hacia la Seguridad de la Información. El dominio de Linux permite al
                            profesional comprender las vulnerabilidades de redes, monitorear logs de acceso y fortalecer los
                            protocolos de seguridad digital, integrando la protección física con la defensa ante amenazas
                            cibernéticas.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Orientado a empresas</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Programa ideal para el manejo de un nuevo sistema operativo.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info" data-curso="Linux">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Presto Software
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/ofimatica/presto.jpg') }}" alt="Vigilante Privado">
                    <span class="curso-tag">Gestión de proyectos</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Presupuestos y control de costos
                        </div>

                        <h2 class="curso-title mb-2">
                            Presto Software
                        </h2>

                        <p class="curso-resumen mb-3">
                            Domina el estándar de la industria para la elaboración de presupuestos y control financiero de
                            obras. Aprenderás a estructurar Análisis de Precios Unitarios (APU), gestionar recursos y
                            generar informes económicos precisos, vitales para la planificación rentable de cualquier
                            proyecto de instalación.
                        </p>

                        <p class="curso-resumen mb-3">
                            Dirigido a Jefes de Operaciones, cubicadores y encargados de licitaciones en empresas de
                            seguridad que necesitan valorizar profesionalmente proyectos de implementación (casetas, cercos,
                            sistemas CCTV), asegurando ofertas competitivas y márgenes controlados.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Uso: Licitaciones y obras</span>
                            <span>Modalidad: Presencial y virtual</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Diseñado para perfiles que requieren gestión a gran escala.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Vigilante Privado">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Microsoft Office
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/ofimatica/Office.jpg') }}" alt="Conserje y Mayordomo">
                    <span class="curso-tag">Gestión administrativa</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Productividad y Reportes
                        </div>

                        <h2 class="curso-title mb-2">
                            Microsoft Office 365
                        </h2>

                        <p class="curso-resumen mb-3">
                            Domina las herramientas esenciales para la administración moderna. Aprenderás a redactar
                            documentos formales en Word, gestionar bases de datos y planillas de turnos en Excel, y diseñar
                            presentaciones efectivas con PowerPoint, optimizando el tiempo en tareas operativas.
                        </p>

                        <p class="curso-resumen mb-3">
                            Ideal para personal de seguridad que busca ascender a roles de supervisión, encargados de RRHH o
                            administración de contratos. Es fundamental para la elaboración profesional de informes de
                            incidencias, control de asistencia y comunicación con clientes corporativos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Gestión en condominios</span>
                            <span>Modalidad: Presencial y virtual</span>
                            <span>Uso: Informes y supervisión</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Mejora la gestión de archivos de una comunidad.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Conserje y Mayordomo">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Ciberseguridad Basica
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/ofimatica/ciberseguridad.jpg') }}" alt="Curso CCTV">
                    <span class="curso-tag">Seguridad Digital</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Protección de datos y activos
                        </div>

                        <h2 class="curso-title mb-2">
                            Fundamentos de ciberseguridad
                        </h2>

                        <p class="curso-resumen mb-3">
                            Capacítate en la detección y prevención de amenazas digitales. Aprenderás a identificar intentos
                            de fraude (phishing), asegurar redes Wi-Fi y proteger la confidencialidad de la información,
                            blindando los sistemas tecnológicos críticos de la organización.
                        </p>

                        <p class="curso-resumen mb-3">
                            Esencial para Supervisores, Operadores de CCTV y personal de control de acceso que gestionan
                            datos sensibles. Este curso entrega las competencias para evitar vulneraciones en sistemas de
                            videovigilancia y proteger la información de clientes y residentes contra ataques externos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Uso: Protección de sistemas</span>
                            <span>Modalidad: Presencial y virtual</span>
                            <span>Duración referencial: -- hrs</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para salas de monitoreo y centros de control.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info" data-curso="Curso CCTV">
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
                                            <input type="text" name="nombre" class="form-control form-curso-field"
                                                placeholder="Ej: Juan Pérez" required>
                                            <div class="form-curso-help">
                                                Persona de contacto principal.
                                            </div>
                                        </div>

                                        {{-- Correo --}}
                                        <div class="col-md-6">
                                            <label class="form-curso-label mb-1">Correo electrónico</label>
                                            <input type="email" name="correo" class="form-control form-curso-field"
                                                placeholder="correo@ejemplo.cl" required>
                                            <div class="form-curso-help">
                                                Donde enviaremos la información del curso.
                                            </div>
                                        </div>

                                        {{-- Teléfono --}}
                                        <div class="col-md-6">
                                            <label class="form-curso-label mb-1">Teléfono</label>
                                            <input type="text" name="telefono" class="form-control form-curso-field"
                                                placeholder="+56 9 1234 5678">
                                            <div class="form-curso-help">
                                                Opcional, para coordinar vía llamada o WhatsApp.
                                            </div>
                                        </div>

                                        {{-- Curso de interés --}}
                                        <div class="col-md-6">
                                            <label class="form-curso-label mb-1">Curso de interés</label>
                                            <input type="text" id="curso_interes" name="curso_interes"
                                                class="form-control form-curso-field"
                                                placeholder="Ej: Formación de Guardias OS10" required>
                                            <div class="form-curso-help">
                                                Se completa automáticamente al elegir “Más información”.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-curso-divider"></div>

                                    {{-- Mensaje --}}
                                    <div class="mb-3">
                                        <label class="form-curso-label mb-1">Mensaje / Detalles</label>
                                        <textarea name="mensaje" rows="4" class="form-control form-curso-field"
                                            placeholder="Indica fechas tentativas, número de participantes, modalidad (presencial/online), requerimientos especiales, etc."></textarea>
                                    </div>

                                    <div
                                        class="mt-3 d-flex flex-column flex-sm-row align-items-sm-center justify-content-between">
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