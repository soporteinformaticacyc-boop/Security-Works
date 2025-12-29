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
    DEA
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/dea.jpg') }}" alt="Formación de Guardias OS10">
                    <span class="curso-tag">Certificación</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Ley de zonas cardioprotegidas
                        </div>

                        <h2 class="curso-title mb-2">
                            Uso y Manejo de DEA/RCP
                        </h2>

                        <p class="curso-resumen mb-3">
                            Capacitación técnica para el uso correcto del Desfibrilador Externo Automático (DEA) y la
                            ejecución de maniobras de reanimación cardiopulmonar. Este curso cumple con la normativa vigente
                            sobre zonas cardioprotegidas, preparando al personal para actuar con rapidez y eficacia ante
                            paros cardiorrespiratorios en espacios públicos o privados.
                        </p>

                        <p class="curso-resumen mb-3">
                            Personal de seguridad, encargados de edificios, brigadistas de emergencia y público general
                            designado para la respuesta ante emergencias cardíacas.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Uso y Manejo de DEA/RCP">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    PLasma rico en plaquetas
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/plaquetas.jpg') }}" alt="DEA">
                    <span class="curso-tag">Especialización</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Estetica clinica y bioseguridad
                        </div>

                        <h2 class="curso-title mb-2">
                            Plasma rico en Plaquetas
                        </h2>

                        <p class="curso-resumen mb-3">
                            Curso avanzado enfocado en la obtención, preparación y aplicación de plasma autólogo con fines
                            estéticos y regenerativos. Se pone énfasis en los protocolos de asepsia, bioseguridad y
                            normativa sanitaria para garantizar procedimientos seguros y efectivos en la regeneración
                            tisular.
                        </p>

                        <p class="curso-resumen mb-3">
                            Profesionales del área de la salud (enfermeros, odontólogos, médicos) y estética que deseen
                            ampliar sus competencias en tratamientos bioregenerativos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración: -- Horas</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Programa ideal para aplicaciones en tratamientos médicos.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Plasma rico en Plaquetas">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Primeros auxilios y RCP
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/rcp.jpg') }}" alt="Vigilante Privado">
                    <span class="curso-tag">Taller</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Respuesta inmediata de emergencia
                        </div>

                        <h2 class="curso-title mb-2">
                            Primeros Auxilios y RCP Básico
                        </h2>

                        <p class="curso-resumen mb-3">
                            Entrenamiento integral para brindar la primera atención ante accidentes o enfermedades súbitas
                            antes de la llegada de equipos médicos. Aprenderás a evaluar la escena, estabilizar al paciente
                            y realizar maniobras de Reanimación Cardiopulmonar (RCP), una competencia vital para cualquier
                            agente de seguridad o monitor.
                        </p>

                        <p class="curso-resumen mb-3">
                            Guardias de seguridad, prevencionistas, docentes y cualquier persona interesada en adquirir
                            conocimientos vitales para la asistencia de accidentados.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración: -- Horas</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Diseñado para perfiles que necesitan tecnicas de primeros auxilios.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="RCP y Primeros Auxilios">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Traslado y movilizacion de pacientes
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/traslado.jpg') }}"
                        alt="Traslado y movilizacion de pacientes">
                    <span class="curso-tag">Técnico</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Manejo de trauma y evacuación
                        </div>

                        <h2 class="curso-title mb-2">
                            Traslado e inmovilización de pacientes
                        </h2>

                        <p class="curso-resumen mb-3">
                            Domina las técnicas seguras para el movimiento y transporte de personas lesionadas. El curso
                            enseña el uso correcto de tablas espinales, collarines y técnicas de levantamiento para prevenir
                            lesiones secundarias durante la evacuación en situaciones de crisis o accidentes laborales.
                        </p>

                        <p class="curso-resumen mb-3">
                            Camilleros, personal de ambulancias, brigadas de emergencia industrial y equipos de rescate.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración: -- Horas</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Dedicado a proteger a las personas durante emergencias médicas.
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
    Asistente de Enfermería
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/asistente.jpg') }}" alt="Asistente de Enfermería">
                    <span class="curso-tag">Programa</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Gestión y apoyo clínico
                        </div>

                        <h2 class="curso-title mb-2">
                            Asistente de Enfermería
                        </h2>

                        <p class="curso-resumen mb-3">
                            Formación teórico-práctica para apoyar la gestión del cuidado en centros de salud. Aprenderás
                            sobre control de signos vitales, administración básica, higiene del paciente y confort, actuando
                            como un pilar fundamental en el equipo de salud bajo supervisión profesional.
                        </p>

                        <p class="curso-resumen mb-3">
                            Personas con vocación de servicio que busquen integrarse al sistema de salud público o privado
                            en roles de apoyo técnico.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Hibrida</span>
                            <span>Certificación Sence</span>
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

    {{-- ===========================
    Soporte Vital Basico
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/vital.jpg') }}" alt="Soporte vital básico">
                    <span class="curso-tag">Programa</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Protocolos internacionales (BLS)
                        </div>

                        <h2 class="curso-title mb-2">
                            Soporte vital básico
                        </h2>

                        <p class="curso-resumen mb-3">
                            Curso intensivo basado en guías internacionales para el manejo del paro cardíaco y la
                            obstrucción de la vía aérea en adultos y pediatría. Se enfoca en la cadena de supervivencia,
                            ventilaciones efectivas y compresiones de alta calidad para equipos de respuesta sanitaria.
                        </p>

                        <p class="curso-resumen mb-3">
                            Profesionales de la salud y técnicos en urgencias médicas que requieren certificación
                            actualizada en protocolos de soporte vital.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Soporte Vital Basico">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Cuidado de enfermos
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/enfermos.jpg') }}" alt="enfermos">
                    <span class="curso-tag">Taller</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Atención domiciliaria
                        </div>

                        <h2 class="curso-title mb-2">
                            Cuidados generales de enfermos
                        </h2>

                        <p class="curso-resumen mb-3">
                            Capacitación orientada al cuidado humanizado y técnico de personas en situación de enfermedad.
                            Aborda desde la administración de medicamentos orales hasta la prevención de escaras y manejo de
                            la movilidad reducida en el entorno domiciliario u hospitalario.
                        </p>

                        <p class="curso-resumen mb-3">
                            Cuidadores informales, familiares y personal de apoyo en casas de reposo u hospitalización
                            domiciliaria.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Propia</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="cuidado enfermos">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Podología
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/podologia.jpg') }}" alt="podologia">
                    <span class="curso-tag">Programa</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Salud del pie y prevención
                        </div>

                        <h2 class="curso-title mb-2">
                            Podología básica y clinica
                        </h2>

                        <p class="curso-resumen mb-3">
                            Formación técnica en el diagnóstico y tratamiento de afecciones del pie. El curso cubre
                            anatomía, patologías comunes, técnicas de corte y esterilización de instrumental, con un fuerte
                            enfoque en la higiene y prevención de complicaciones en pacientes diabéticos o geriátricos.
                        </p>

                        <p class="curso-resumen mb-3">
                            Emprendedores y personas interesadas en desempeñarse en centros de estética, consultas
                            podológicas o atención a domicilio.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="podologia básica y clinica">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Manicure y Pedicure
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/pedicure.jpg') }}"
                        alt="Técnicas profesionales de manicure y pedicure">
                    <span class="curso-tag">Taller</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Estética y cuidado personal
                        </div>

                        <h2 class="curso-title mb-2">
                            Tecnicas profesionales de manicure y pedicure.
                        </h2>

                        <p class="curso-resumen mb-3">
                            Aprende las últimas tendencias en cuidado y embellecimiento de manos y pies. El curso incluye
                            técnicas de esmaltado, tratamiento de cutículas y spa de manos, siempre bajo estrictos
                            estándares de higiene y esterilización de herramientas para garantizar un servicio seguro y de
                            calidad.
                        </p>

                        <p class="curso-resumen mb-3">
                            Quienes deseen iniciar un emprendimiento independiente o trabajar en salones de belleza y
                            centros de estética integral.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Propia</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="pedicure y manicure">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Estetica integral
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/estetica.jpg') }}" alt="Estética integral y corporal">
                    <span class="curso-tag">Programa</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Cosmetología y bienestar
                        </div>

                        <h2 class="curso-title mb-2">
                            Estética integral y corporal
                        </h2>

                        <p class="curso-resumen mb-3">
                            Programa completo que abarca tratamientos faciales y corporales. Desde limpiezas profundas hasta
                            masoterapia reductiva, el alumno aprenderá a utilizar aparatología estética y productos
                            dermocosméticos, ofreciendo soluciones integrales para el bienestar y la imagen personal.
                        </p>

                        <p class="curso-resumen mb-3">
                            Futuros profesionales de la belleza que buscan una formación versátil para desempeñarse en spas,
                            hoteles y centros especializados.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: 90 hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="estetica integral y corporal">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Cuidado Adultos mayores
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/salud/mayores.jpg') }}" alt="Cuidados del adulto mayor">
                    <span class="curso-tag">Programa</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Geriatría y Cuidado
                        </div>

                        <h2 class="curso-title mb-2">
                            Cuidados del adulto mayor
                        </h2>

                        <p class="curso-resumen mb-3">
                            Especialización en la atención de la tercera edad, enfocada en promover la autonomía y calidad
                            de vida. Se tratan temas como nutrición geriátrica, manejo de demencias seniles, estimulación
                            cognitiva y primeros auxilios específicos para el adulto mayor.
                        </p>

                        <p class="curso-resumen mb-3">
                            Cuidadores, técnicos en enfermería y personal de residencias de larga estadía (ELEAM) que
                            requieren herramientas específicas para el trato digno y seguro de ancianos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Híbrida</span>
                            <span>Certificación Propia</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            ¿Dudas sobre requisitos, horarios o valores? Te orientamos sin compromiso.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="adultos mayores">
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