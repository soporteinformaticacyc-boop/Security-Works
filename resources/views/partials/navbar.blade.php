<nav class="bg-[#EE1D23] text-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">

            <a href="{{ route('home') }}" class="flex-shrink-0 hover:opacity-80 transition">
                <img src="{{ asset('img/SecurityWork_LOGOTIPO_BLANCO-1-e1673918707780.png') }}" alt="Logo Security Work" class="h-12 w-auto">
            </a>

            <div class="hidden md:flex space-x-1 font-semibold">
                
                <a href="{{ route('home') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('home') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Home
                </a>

                <a href="{{ route('noticias') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('noticias') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Noticias
                </a>

                <a href="{{ route('cursos') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('cursos') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Cursos
                </a>

                <a href="{{ route('nosotros') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('nosotros') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    ¿Quiénes Somos?
                </a>

                <a href="{{ route('certificacion') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('certificacion') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Certificación OS10
                </a>

                <a href="{{ route('inscribete') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('inscribete') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Inscríbete
                </a>

                <a href="{{ route('contacto') }}"
                    class="px-3 py-5 border-b-4 transition duration-300 {{ request()->routeIs('contacto') ? 'border-white bg-red-700' : 'border-transparent hover:bg-red-600 hover:border-red-400' }}">
                    Contáctanos
                </a>

            </div>

            <div class="md:hidden flex items-center pr-2">
                <button id="mobile-menu-button" class="text-white focus:outline-none hover:text-gray-200 transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-[#c4161b] border-t border-red-700">
        
        <a href="{{ route('home') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800 {{ request()->routeIs('home') ? 'bg-red-800 font-bold' : '' }}">
            Home
        </a>

        <a href="{{ route('noticias') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800 {{ request()->routeIs('noticias') ? 'bg-red-800 font-bold' : '' }}">
            Noticias
        </a>

        <a href="{{ route('cursos') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800 {{ request()->routeIs('cursos') ? 'bg-red-800 font-bold' : '' }}">
            Cursos
        </a>

        <a href="{{ route('nosotros') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800 {{ request()->routeIs('nosotros') ? 'bg-red-800 font-bold' : '' }}">
            ¿Quiénes Somos?
        </a>

        <a href="{{ route('certificacion') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800 {{ request()->routeIs('certificacion') ? 'bg-red-800 font-bold' : '' }}">
            Certificación OS10
        </a>

        <a href="{{ route('inscribete') }}" class="block px-4 py-3 border-b border-red-600 hover:bg-red-800 {{ request()->routeIs('inscribete') ? 'bg-red-800 font-bold' : '' }}">
            Inscríbete
        </a>

        <a href="{{ route('contacto') }}" class="block px-4 py-3 hover:bg-red-800 {{ request()->routeIs('contacto') ? 'bg-red-800 font-bold' : '' }}">
            Contáctanos
        </a>

    </div>

    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</nav>