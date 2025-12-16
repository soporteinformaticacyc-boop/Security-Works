@php
    // Definimos las áreas de especialización (Los "demás cursos")
    $areas = [
        'Ofimática', 'Salud', 'Negocios', 'Educación', 
        'Minería y Construcción', 'Calidad y Alimentación', 
        'Electricidad e Industrias', 'Prevención de Riesgos', 
        'Finanzas y Gestión'
    ];
@endphp

<nav class="bg-[#EE1D23] text-white shadow-lg sticky top-0 z-50 font-sans">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">

            <a href="{{ route('home') }}" class="flex-shrink-0 hover:opacity-80 transition z-50">
                <img src="{{ asset('img/SecurityWork_LOGOTIPO_BLANCO-1-e1673918707780.png') }}" alt="Logo" class="h-10 md:h-12 w-auto">
            </a>

            <div class="hidden md:flex space-x-1 font-semibold items-center h-full">
                
                {{-- 1. HOME --}}
                <a href="{{ route('home') }}" class="h-full flex items-center px-3 border-b-4 transition duration-300 {{ request()->routeIs('home') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600' }}">
                    Home
                </a>

                {{-- 2. NOTICIAS --}}
                <a href="{{ route('noticias') }}" class="h-full flex items-center px-3 border-b-4 transition duration-300 {{ request()->routeIs('noticias') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600' }}">
                    Noticias
                </a>

                {{-- 3. CURSO OS10 (Antes era 'Cursos', ahora es el principal) --}}
                {{-- Apunta a 'certificacion' porque es el curso estrella --}}
                <a href="{{ route('certificacion') }}" class="h-full flex items-center px-3 border-b-4 transition duration-300 {{ request()->routeIs('certificacion') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600' }}">
                    Curso Especialización
                </a>

                {{-- 4. QUIÉNES SOMOS --}}
                <a href="{{ route('nosotros') }}" class="h-full flex items-center px-3 border-b-4 transition duration-300 {{ request()->routeIs('nosotros') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600' }}">
                    Quiénes Somos
                </a>

                {{-- 5. ÁREAS DE ESPECIALIZACIÓN (Desplegable) --}}
                {{-- Este ocupa el lugar que antes tenía "Certificación OS10" --}}
                <div class="group h-full flex items-center relative">
                    <a href="{{ route('cursos') }}" class="h-full flex items-center px-3 border-b-4 border-transparent hover:bg-red-600 cursor-pointer gap-1 {{ request()->routeIs('cursos') ? 'border-white bg-red-700' : '' }}">
                        Áreas / Especialidades
                        <svg class="w-4 h-4 transform group-hover:rotate-180 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>

                    <div class="absolute left-0 top-16 w-72 bg-white text-gray-800 shadow-2xl hidden group-hover:block border-t-4 border-red-800 animate-fade-in-down z-40 rounded-b-lg">
                        <ul class="py-2">
                            @foreach ($areas as $area)
                                <li>
                                    {{-- El link lleva a la página general de cursos y baja al ancla #area --}}
                                    <a href="{{ route('cursos') }}#{{ Str::slug($area) }}" class="block px-6 py-3 hover:bg-red-50 hover:text-red-600 transition border-b border-gray-100 last:border-0 flex justify-between items-center group/item">
                                        {{ $area }}
                                        <span class="text-gray-300 group-hover/item:text-red-600">›</span>
                                    </a>
                                </li>
                            @endforeach
                            <li>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- 6. INSCRÍBETE --}}
                <a href="{{ route('inscribete') }}" class="h-full flex items-center px-3 border-b-4 transition duration-300 {{ request()->routeIs('inscribete') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600' }}">
                    Inscríbete
                </a>

                {{-- 7. CONTÁCTANOS --}}
                <a href="{{ route('contacto') }}" class="h-full flex items-center px-3 border-b-4 transition duration-300 {{ request()->routeIs('contacto') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600' }}">
                    Contáctanos
                </a>

            </div>

            <div class="md:hidden flex items-center pr-2">
                <button id="mobile-menu-button" class="text-white focus:outline-none hover:text-gray-200 transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-[#c4161b] border-t border-red-700 overflow-y-auto max-h-[80vh]">
        
        <a href="{{ route('home') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800">Home</a>
        <a href="{{ route('noticias') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800">Noticias</a>
        <a href="{{ route('certificacion') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800 font-bold bg-red-900/30">Curso OS10</a>
        <a href="{{ route('nosotros') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800">Quiénes Somos</a>

        <div class="border-b border-red-600">
            <button id="mobile-areas-btn" class="w-full text-left px-4 py-3 flex justify-between items-center hover:bg-red-800 focus:outline-none">
                Áreas / Especialidades
                <svg id="mobile-areas-icon" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            
            <div id="mobile-areas-list" class="hidden bg-red-900">
                @foreach ($areas as $area)
                    <a href="{{ route('cursos') }}#{{ Str::slug($area) }}" class="block px-8 py-3 text-sm text-white hover:bg-red-800 border-b border-red-800 last:border-0 flex items-center">
                        <span class="w-1.5 h-1.5 bg-red-400 rounded-full mr-2"></span>
                        {{ $area }}
                    </a>
                @endforeach
            </div>
        </div>

        <a href="{{ route('inscribete') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800">Inscríbete</a>
        <a href="{{ route('contacto') }}" class="block px-4 py-3 hover:bg-red-800">Contáctanos</a>
    </div>

    <script>
        // Lógica para abrir/cerrar menú principal móvil
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Lógica para acordeón de áreas en móvil
        document.getElementById('mobile-areas-btn').addEventListener('click', () => {
            document.getElementById('mobile-areas-list').classList.toggle('hidden');
            document.getElementById('mobile-areas-icon').classList.toggle('rotate-180');
        });
    </script>
</nav>