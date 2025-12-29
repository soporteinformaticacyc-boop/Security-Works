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
    Adm. y Control de Inventario Básico
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/inventario.jpg') }}" alt="inventario">
                    <span class="curso-tag">Logística</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Protección de activos y stock
                        </div>

                        <h2 class="curso-title mb-2">
                            Administración y control de inventario
                        </h2>

                        <p class="curso-resumen mb-3">
                            Optimiza la gestión de bodegas minimizando mermas y 'pérdidas desconocidas'. El curso entrega
                            herramientas técnicas para el registro, trazabilidad y auditoría de existencias, fundamental
                            para mantener la seguridad patrimonial y la continuidad operativa de la cadena de suministro.
                        </p>

                        <p class="curso-resumen mb-3">
                            Bodegueros, encargados de logística y personal de seguridad que requiere conocimientos en
                            control de entrada y salida de mercancías.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Recomendado para personal de almacenes y centros de distribución.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Administración y control de inventario">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    GTD
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/gtd.jpg') }}" alt="GTD">
                    <span class="curso-tag">Eficiencia</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Productividad y Gestión
                        </div>

                        <h2 class="curso-title mb-2">
                            Administración del tiempo (GTD)
                        </h2>

                        <p class="curso-resumen mb-3">
                            En seguridad, el tiempo es crítico. Aprende a gestionar flujos de trabajo y prioridades bajo la
                            metodología Getting Things Done (GTD). Este sistema permite organizar tareas pendientes y
                            reducir el estrés operativo, asegurando que las urgencias no desplacen a lo importante.
                        </p>

                        <p class="curso-resumen mb-3">
                            Supervisores, jefes de operaciones y administrativos que manejan múltiples requerimientos
                            simultáneos y plazos estrictos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración: 12 Horas</span>
                            <span>Modalidad: Presencial</span>
                            <span>Taller práctico</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Programa ideal para la gestión de proyectos o actividades empresariales.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Administración del tiempo (GTD)">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Com. Efectiva y Manejo de Conflictos para Empresa
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/conflicto.jpg') }}" alt="conflicto">
                    <span class="curso-tag">Habilidades blandas</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Clima laboral y contención
                        </div>

                        <h2 class="curso-title mb-2">
                            Comunicación efectiva y manejo de conflictos
                        </h2>

                        <p class="curso-resumen mb-3">
                            Desarrolla la capacidad de desactivar situaciones tensas antes de que escalen. El curso se
                            enfoca en la comunicación asertiva y técnicas de mediación corporativa, herramientas vitales
                            para mantener la seguridad interna y un ambiente laboral libre de hostilidad.
                        </p>

                        <p class="curso-resumen mb-3">
                            Líderes de equipo, RRHH y personal que interactúa constantemente con clientes internos o
                            externos en situaciones de presión.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración: -- Horas</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Diseñado para perfiles que necesitan técnicas de comunicación efectiva y manejo de conflictos.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Comunicación efectiva y manejo de conflictos">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Gestion y direccion de proyectos
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/gestion_proyectos.png') }}"
                        alt="Gestión y dirección de proyectos">
                    <span class="curso-tag">Programa</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Planificación estrategica
                        </div>

                        <h2 class="curso-title mb-2">
                            Gestión y dirección de proyectos
                        </h2>

                        <p class="curso-resumen mb-3">
                            Domina el ciclo completo de un proyecto, desde la evaluación de riesgos hasta la entrega final.
                            Aprenderás a coordinar recursos, tiempos y costos, garantizando que las implementaciones
                            (tecnológicas, de infraestructura o servicios) cumplan con los estándares de calidad exigidos.
                        </p>

                        <p class="curso-resumen mb-3">
                            Jefes de proyecto, ingenieros y encargados de implementar nuevas soluciones o servicios en la
                            organización.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración: -- Horas</span>
                            <span>Modalidad: Híbrida</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Dedicado al manejo de proyectos de mediana o mayor escala.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Gestión y dirección de proyectos">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Ventas consultivas
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/consultivas.jpg') }}" alt="Ventas consultivas">
                    <span class="curso-tag">Negocios</span>
                </div>

                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Negociación estratégica
                        </div>

                        <h2 class="curso-title mb-2">
                            Ventas consultivas: Modelo Harvard
                        </h2>

                        <p class="curso-resumen mb-3">
                            Especialízate en negociaciones complejas basadas en intereses y no en posiciones. Este curso
                            enseña a generar acuerdos de mutuo beneficio (Win-Win), ideal para cerrar contratos de servicios
                            de seguridad o tecnología de alto valor, construyendo relaciones a largo plazo.
                        </p>

                        <p class="curso-resumen mb-3">
                            Gerentes comerciales, ejecutivos de cuentas corporativas (KAM) y directores que negocian
                            contratos B2B.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Híbrida</span>
                            <span>Certificación Propia</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que manejan negociaciones complejas y contratos de alto valor.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="Curso Ventas Consultivas">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Técnicas efectivas de ventas
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/efectiva_ventas.jpg') }}" alt="Técnicas efectivas de ventas">
                    <span class="curso-tag">Taller</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Cierre y persuación
                        </div>

                        <h2 class="curso-title mb-2">
                            Técnicas efectivas de ventas
                        </h2>

                        <p class="curso-resumen mb-3">
                            Entrenamiento táctico enfocado en el proceso comercial directo: prospección, argumentación y
                            manejo de objeciones. Aprende a comunicar valor y seguridad al cliente, transformando dudas en
                            decisiones de compra efectivas y rápidas.
                        </p>

                        <p class="curso-resumen mb-3">
                            Fuerza de ventas en terreno, ejecutivos comerciales y emprendedores que buscan aumentar su tasa
                            de cierre.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Taller Práctico</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideeal para vendedores que buscan mejorar sus habilidades de cierre y persuasión.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="tecnicas efectivas de ventas">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Comercio exterior y transporte internacional
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/internacional.jpg') }}" alt="comercio exterior">
                    <span class="curso-tag">Técnico</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Logística global segura
                        </div>

                        <h2 class="curso-title mb-2">
                            Comercio exterior y transporte
                        </h2>

                        <p class="curso-resumen mb-3">
                            Comprende la normativa aduanera y los Incoterms que rigen el movimiento global de mercancías. El
                            curso pone énfasis en la documentación crítica y los protocolos de seguridad necesarios para
                            proteger la carga durante el transporte internacional.
                        </p>

                        <p class="curso-resumen mb-3">
                            Analistas de Comex, encargados de importaciones y operadores logísticos enfocados en seguridad
                            de la cadena de suministro.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que gestionan operaciones de comercio exterior con enfoque en
                            seguridad.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="comercio exterior y transporte internacional">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Tecnica de venta consultiva
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/consultiva.jpeg') }}" alt="Ventas consultivas">
                    <span class="curso-tag">Especialización</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Asesoría y soluciones
                        </div>

                        <h2 class="curso-title mb-2">
                            Técnica de venta consultiva integral
                        </h2>

                        <p class="curso-resumen mb-3">
                            A diferencia de la venta transaccional, este enfoque convierte al vendedor en un asesor experto.
                            Aprenderás a diagnosticar los 'dolores' y riesgos del cliente para prescribir la solución
                            exacta, elevando el perfil profesional de la oferta comercial.
                        </p>

                        <p class="curso-resumen mb-3">
                            Consultores de seguridad, ingenieros de preventa y asesores técnicos que comercializan
                            soluciones a medida.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Propia</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que venden soluciones técnicas o personalizadas.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="tecnica de venta consultiva integral">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Liderazgo y trabajo en equipo
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/equipo.jpg') }}"
                        alt="Técnicas profesionales de manicure y pedicure">
                    <span class="curso-tag">Liderazgo</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Gestión de personas y equipos
                        </div>

                        <h2 class="curso-title mb-2">
                            Liderazgo y trabajo en equipo
                        </h2>

                        <p class="curso-resumen mb-3">
                            Fortalece las capacidades de mando para dirigir equipos cohesionados y disciplinados. Se abordan
                            técnicas de motivación, delegación responsable y construcción de confianza, claves para mantener
                            la operatividad en estructuras jerárquicas.
                        </p>

                        <p class="curso-resumen mb-3">
                            Supervisores de seguridad, jefes de turno y coordinadores de área con personal a cargo.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Certificación Propia</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para mandos medios que buscan mejorar la gestión de sus equipos.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="liderazgo y trabajo en equipo">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Neuro-ventas
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/neuroventas.png') }}" alt="Neuro-ventas aplicadas">
                    <span class="curso-tag">Innovación</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Psicología del consumidor
                        </div>

                        <h2 class="curso-title mb-2">
                            Neuro-ventas aplicadas
                        </h2>

                        <p class="curso-resumen mb-3">
                            Descubre cómo funciona el cerebro del cliente al tomar decisiones de compra. Aprenderás a
                            utilizar gatillos mentales que activan la necesidad de protección, seguridad y confort,
                            optimizando el discurso comercial desde una base científica.
                        </p>

                        <p class="curso-resumen mb-3">
                            Marketing, ejecutivos de ventas y publicistas interesados en la conducta humana y la persuasión
                            ética.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: 90 hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Propia</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que buscan entender el comportamiento del consumidor.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="neuro-ventas aplicadas">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Marketing
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/Marketing.jpg') }}" alt="Marketing estratégico y operativo">
                    <span class="curso-tag">Estrategia</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Posicionamiento de marca
                        </div>

                        <h2 class="curso-title mb-2">
                            Marketing estratégico y operativo
                        </h2>

                        <p class="curso-resumen mb-3">
                            Aprende a definir propuestas de valor, segmentar mercados y diseñar planes de marketing que
                            destaquen la solidez de tu empresa. El curso abarca desde el análisis de competencia hasta la
                            ejecución de campañas para captar nuevos clientes.
                        </p>

                        <p class="curso-resumen mb-3">
                            Emprendedores, analistas de marketing y gerentes que buscan posicionar servicios en mercados
                            competitivos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Híbrida</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que desean fortalecer la presencia de su marca en el mercado.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="marketing estrategico y operativo">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Oratoria y manejo de la voz para una comunicación efectiva
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/oratoria.jpg') }}" alt="Oratoria y manejo de la voz">
                    <span class="curso-tag">Habilidades blandas</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Expresión y autoridad
                        </div>

                        <h2 class="curso-title mb-2">
                            Oratoria y manejo de la voz para una comunicación efectiva
                        </h2>

                        <p class="curso-resumen mb-3">
                            La seguridad también se transmite con la voz. Mejora tu dicción, proyección y lenguaje no verbal
                            para realizar presentaciones de alto impacto, dar instrucciones claras a equipos grandes o
                            exponer ante directorios con total autoridad y confianza.
                        </p>

                        <p class="curso-resumen mb-3">
                            Capacitadores, voceros organizacionales y directivos que requieren dominio escénico.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: Presencial</span>
                            <span>Taller Práctico</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que deben hablar en público con frecuencia.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="oratoria y manejo de la voz para una comunicación efectiva">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Indicador de gestion KPI
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/kpi.jpg') }}" alt="Diseño de indicadores de gestión (KPI)">
                    <span class="curso-tag">Gestión</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Metodologías de medición
                        </div>

                        <h2 class="curso-title mb-2">
                            Diseño de indicadores de gestión (KPI)
                        </h2>

                        <p class="curso-resumen mb-3">
                            Lo que no se mide, no se controla. Domina la creación y análisis de KPIs (Key Performance
                            Indicators) para evaluar objetivamente el rendimiento de procesos, la efectividad de la
                            seguridad y el cumplimiento de metas corporativas.
                        </p>

                        <p class="curso-resumen mb-3">
                            Analistas de gestión, jefes de operaciones y gerentes que necesitan tableros de control para la
                            toma de decisiones.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que buscan implementar métricas de desempeño efectivas.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="diseño de indicadores de gestión (kpi)">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Servicio al cliente, atención call center
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/callcenter.jpeg') }}" alt="Servicio al cliente y atención en call center">
                    <span class="curso-tag">Servicio</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Protocolos de atención
                        </div>

                        <h2 class="curso-title mb-2">
                            Servicio al cliente y atención en call center
                        </h2>

                        <p class="curso-resumen mb-3">
                            Estandariza la calidad de atención en puntos de contacto críticos. El curso enseña protocolos de
                            etiqueta telefónica, manejo de reclamos y escucha activa, asegurando que cada interacción
                            refuerce la imagen de profesionalismo y confianza de la empresa.
                        </p>

                        <p class="curso-resumen mb-3">
                            Operadores de mesa de ayuda, recepcionistas, personal de monitoreo y ejecutivos de atención
                            telefónica.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que desean fortalecer la presencia de su marca en el mercado.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="call center y servicio al cliente">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Normativa ley de compras publicas
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/publica.jpg') }}" alt="Normativa y ley de compras publicas">
                    <span class="curso-tag">Legislación</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Licitaciones y mercado público
                        </div>

                        <h2 class="curso-title mb-2">
                            Normativa y ley de compras publicas
                        </h2>

                        <p class="curso-resumen mb-3">
                            Conviértete en un proveedor experto del Estado. Analizaremos la Ley 19.886 y sus reglamentos,
                            enseñándote a operar en el portal Mercado Público, preparar licitaciones competitivas y cumplir
                            con los requisitos administrativos sin errores.
                        </p>

                        <p class="curso-resumen mb-3">
                            Encargados de licitaciones, administrativos de ventas y proveedores que buscan adjudicar
                            contratos gubernamentales.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que desean participar en licitaciones públicas.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="normativa y ley de compras publicas">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Metodologia kaizen
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/metodokaizen.jpg') }}" alt="Metodología Kaizen">
                    <span class="curso-tag">Calidad</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Mejora continua
                        </div>

                        <h2 class="curso-title mb-2">
                            Metodología Kaizen
                        </h2>

                        <p class="curso-resumen mb-3">
                            Implementa la filosofía japonesa de la 'Mejora Continua' en tu organización. Aprende a detectar
                            ineficiencias, estandarizar procesos y empoderar a los colaboradores para realizar pequeños
                            cambios diarios que generan grandes impactos en calidad y seguridad.
                        </p>

                        <p class="curso-resumen mb-3">
                            Encargados de calidad, jefes de procesos y líderes de equipos operativos.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que buscan optimizar procesos y mejorar la calidad.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="metodologia kaizen">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Gestión de post-venta
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/post-venta.jpg') }}" alt="Gestión estratégica de post-venta">
                    <span class="curso-tag">Comercial</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Fidelización y garantía
                        </div>

                        <h2 class="curso-title mb-2">
                            Gestión estratégica de post-venta
                        </h2>

                        <p class="curso-resumen mb-3">
                            La relación comercial no termina con la venta. Este curso entrega herramientas para gestionar
                            garantías, soporte técnico y encuestas de satisfacción, transformando la post-venta en una
                            barrera de salida para el cliente y una fuente de nuevas oportunidades.
                        </p>

                        <p class="curso-resumen mb-3">
                            Departamentos de atención al cliente, soporte técnico y ejecutivos de fidelización.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Taller Práctico</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que desean fortalecer la presencia de su marca en el mercado.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="gestion estrategica de post-venta">
                            Más información
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===========================
    Community Manager/Formacion
    =========================== --}}
    <section class="py-5 bg-white">
        <div class="container">

            <div class="curso-card">
                {{-- Imagen izquierda --}}
                <div class="curso-card-media">
                    <img src="{{ asset('img/especializacion/negocios/cm.jpg') }}" alt="Community Manager: Gestión y reputación">
                    <span class="curso-tag">Digital</span>
                </div>

                {{-- Texto derecha --}}
                <div class="curso-card-body">
                    <div>
                        <div class="curso-meta mb-1">
                            Redes sociales corporativas
                        </div>

                        <h2 class="curso-title mb-2">
                            Community Manager: Gestión y reputación
                        </h2>

                        <p class="curso-resumen mb-3">
                            Gestiona la identidad digital de la empresa con un enfoque profesional. Aprenderás a crear
                            contenido relevante, interactuar con la comunidad y aplicar protocolos de respuesta ante crisis
                            de reputación online, protegiendo la imagen de marca.
                        </p>

                        <p class="curso-resumen mb-3">
                            Encargados de comunicaciones, periodistas y asistentes de marketing digital.
                        </p>

                        <div class="curso-badges mb-1">
                            <span>Duración referencial: -- hrs</span>
                            <span>Modalidad: E-learning</span>
                            <span>Certificación Sence</span>
                        </div>
                    </div>

                    <div class="curso-cta d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <small class="text-muted">
                            Ideal para profesionales que desean fortalecer la presencia de su marca en el mercado.
                        </small>

                        <button type="button" class="btn btn-danger fw-semibold btn-curso-info"
                            data-curso="community manager gestion y reputacion">
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