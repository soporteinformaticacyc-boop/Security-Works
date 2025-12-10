<nav class="bg-[#EE1D23] text-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">

            <a href="{{ route('home') }}" class="flex-shrink-0 hover:opacity-80 transition">
                <img src="{{ asset('img/SecurityWork_LOGOTIPO_BLANCO-1-e1673918707780.png') }}" alt="Logo Security Work" class="h-12 w-auto">
            </a>

            <div class="hidden md:flex space-x-1 font-semibold">

                {{-- Enlace: HOME --}}
                <a href="{{ route('home') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('home') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Home
                </a>

                {{-- Enlace: NOTICIAS --}}
                <a href="{{ route('noticias') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('noticias') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Noticias
                </a>

                {{-- Enlace: CURSOS --}}
                <a href="{{ route('cursos') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('cursos') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Cursos
                </a>

                {{-- Enlace: NOSOTROS --}}
                <a href="{{ route('nosotros') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('areas') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    ¿Quienes Somos?
                </a>

                {{-- Enlace: CERTIFICACIÓN OS10 --}}
                <a href="{{ route('certificacion') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('certificacion') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Certificación OS10
                </a>

                {{-- Enlace: INSCRÍBETE --}}
                <a href="{{ route('inscribete') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('inscribete') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Inscríbete
                </a>

                {{-- Enlace: CONTÁCTANOS --}}
                <a href="{{ route('contacto') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('contacto') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Contáctanos
                </a>

            </div>
            <div class="md:hidden flex items-center pr-2">
                <button class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
