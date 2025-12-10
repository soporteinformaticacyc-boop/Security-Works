@extends('layouts.app')

@php
    $logos = [];
    // Generamos del c1.jpg al c36.jpg automáticamente
    for ($i = 1; $i <= 36; $i++) {
        $logos[] = "c{$i}.jpg";
    }
@endphp

@section('content')

    <section class="relative h-[650px] flex items-center bg-gray-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('/img/unnamed.jpg') }}" class="w-full h-full object-cover opacity-30"
                alt="Guardia de Seguridad">
        </div>

        <div class="relative z-10 container mx-auto px-4">
            <div class="max-w-3xl ml-auto text-right text-white">
                <h2 class="text-xl font-light mb-2 tracking-widest text-red-500 uppercase">Expertos en Seguridad Privada
                </h2>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                    Tu futuro profesional en seguridad <br>
                    <span class="text-red-600">comienza aquí</span>
                </h1>
                <p class="text-lg text-gray-300 mb-8 leading-relaxed ml-auto max-w-xl">
                    Líderes en capacitación y certificación OS10. Formamos a la élite de la seguridad en Chile con
                    tecnología moderna e instructores calificados.
                </p>
                <div class="flex justify-end gap-4">
                    <a href="{{ route('cursos') }}"
                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded transition duration-300">
                        Ver Cursos
                    </a>
                    <a href="{{ route('contacto') }}"
                        class="bg-transparent border-2 border-white hover:bg-white hover:text-black text-white font-bold py-3 px-8 rounded transition duration-300">
                        Contáctanos
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white -mt-10 relative z-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-lg shadow-xl border-t-4 border-red-600 text-center hover:-translate-y-2 transition duration-300">
                    <div
                        class="h-16 w-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 text-red-600 text-2xl font-bold">
                        🎓
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Certificación OS10</h3>
                    <p class="text-gray-600">Cursos acreditados por Carabineros de Chile. Obtén tu credencial y accede a
                        mejores oportunidades laborales.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-lg shadow-xl border-t-4 border-gray-800 text-center hover:-translate-y-2 transition duration-300">
                    <div
                        class="h-16 w-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-800 text-2xl font-bold">
                        🚀
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Bolsa Laboral</h3>
                    <p class="text-gray-600">No solo te capacitamos. Gestionamos tu inserción laboral conectándote con las
                        mejores empresas del sector.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-lg shadow-xl border-t-4 border-red-600 text-center hover:-translate-y-2 transition duration-300">
                    <div
                        class="h-16 w-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 text-red-600 text-2xl font-bold">
                        💻
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Aula Virtual</h3>
                    <p class="text-gray-600">Plataforma moderna para complementar tu aprendizaje. Estudia con material
                        actualizado y accesible las 24 horas del día.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">

                <div class="w-full md:w-1/2">
                    <div class="border-4 border-red-600 rounded-lg p-2 bg-white shadow-xl">
                        <img src="{{ asset('img/fggss.jpg') }}" alt="Equipo Security Work" class="rounded-lg w-full h-auto">
                    </div>
                </div>

                <div class="w-full md:w-1/2 space-y-6">
                    <h4 class="text-red-600 font-bold uppercase tracking-wider">Sobre Nosotros</h4>
                    <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">
                        Elevando el estándar de la <br> Seguridad en Chile
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        En <strong>Security Work</strong> entendemos que la seguridad no es solo un trabajo, es una
                        responsabilidad social. Nos dedicamos a transformar personas en profesionales altamente capacitados,
                        capaces de enfrentar los desafíos de la seguridad moderna.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        Nuestra metodología combina teoría rigurosa con práctica real, asegurando que cada egresado cumpla
                        con las exigencias de la normativa vigente y las expectativas del mercado.
                    </p>

                    <ul class="space-y-3 mt-4">
                        <li class="flex items-center text-gray-700">
                            <svg class="w-6 h-6 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Instructores Certificados
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-6 h-6 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Instalaciones de primer nivel
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-6 h-6 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Cobertura Nacional
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-900 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8">Conoce nuestra metodología en acción</h2>

            <div
                class="w-full max-w-4xl mx-auto aspect-video bg-black rounded-lg shadow-2xl overflow-hidden mb-12 border border-gray-700">
                <video class="w-full h-full" controls poster="{{ asset('img/portada_video.jpg') }}">
                    <source src="{{ asset('img/Logos_clientes_SW/Video_SW.mp4') }}" type="video/mp4">
                    Tu navegador no soporta videos HTML5.
                </video>
            </div>

            <div
                class="bg-red-600 rounded-xl p-10 max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between shadow-lg">

                <div class="text-left mb-6 md:mb-0 w-full md:w-1/2">
                    <h3 class="text-2xl font-bold text-white">¿Listo para capacitarte?</h3>
                    <p class="text-red-100 mt-2">Inscríbete hoy en nuestros cursos OS10 y asegura tu cupo.</p>
                </div>

                <div class="flex flex-col gap-3 w-full md:w-auto">

                    <a href="{{ route('inscribete') }}"
                        class="bg-white text-red-600 font-bold py-3 px-8 rounded shadow hover:bg-gray-100 transition text-center w-full md:w-auto">
                        ¡Quiero Inscribirme como Estudiante!
                    </a>

                    <a href="{{ route('contacto') }}"
                        class="bg-white text-red-600 font-bold py-3 px-8 rounded shadow hover:bg-gray-100 transition text-center w-full md:w-auto border-t-2 border-red-100">
                        ¡Quiero Inscribirme como Relator!
                    </a>

                </div>
            </div>
    </section>

    <section class="py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-4 text-center mb-10">
            <h3 class="text-2xl font-light text-gray-500 uppercase tracking-widest">Confían en nosotros</h3>
        </div>

        <div class="relative w-full">

            <div class="flex w-max animate-scroll hover:[animation-play-state:paused]">

                <div class="flex items-center gap-12 mx-6">
                    @foreach ($logos as $logo)
                        <img src="{{ asset('img/Logos_clientes_SW/' . $logo) }}" alt="Cliente"
                            class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                    @endforeach
                </div>

                <div class="flex items-center gap-12 mx-6">
                    @foreach ($logos as $logo)
                        <img src="{{ asset('img/Logos_clientes_SW/' . $logo) }}" alt="Cliente"
                            class="h-16 w-auto object-contain grayscale hover:grayscale-0 transition duration-300">
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection