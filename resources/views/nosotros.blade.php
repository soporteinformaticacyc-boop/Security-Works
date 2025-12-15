@extends('layouts.app')

@section('content')

<section class="relative h-[400px] flex items-center justify-center bg-gray-900">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('img/tu_imagen_oficina.jpg') }}" class="w-full h-full object-cover opacity-30" alt="Fondo Oficina">
    </div>
    
    <div class="relative z-10 text-center px-4">
        <h1 class="text-5xl font-bold text-white mb-4">Nuestra <span class="text-red-600">Empresa</span></h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">
            Más de 10 años formando a la élite de la seguridad privada en Chile.
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        
        <div class="flex flex-col md:flex-row items-center gap-12 mb-20">
            <div class="w-full md:w-1/2">
                <div class="relative rounded-lg overflow-hidden shadow-2xl border-l-8 border-red-600">
                    <img src="{{ asset('img/mision.jpg') }}" alt="Misión" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 to-transparent opacity-60"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-3xl font-bold uppercase">Misión</h3>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 space-y-4">
                <h3 class="text-red-600 font-bold uppercase tracking-widest text-sm">Nuestro Propósito</h3>
                <h2 class="text-3xl font-bold text-gray-900">Formación de Excelencia</h2>
                <p class="text-gray-600 text-justify leading-relaxed">
                    Nuestra empresa se dedica a entregar un servicio de excelencia tanto en las áreas de capacitación, asesorías y seguridad privada. 
                    Nos define nuestro lema de dar confianza y destacar en nuestro rubro, ofreciendo un servicio confiable y de calidad con enfoque en 
                    las empresas y personas que requieran perfeccionamiento.
                </p>
            </div>
        </div>

        <div class="flex flex-col md:flex-row-reverse items-center gap-12">
            <div class="w-full md:w-1/2">
                <div class="relative rounded-lg overflow-hidden shadow-2xl border-r-8 border-gray-800">
                    <img src="{{ asset('img/vision.jpg') }}" alt="Visión" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-l from-red-900 to-transparent opacity-60"></div>
                    <div class="absolute bottom-6 right-6 text-white">
                        <h3 class="text-3xl font-bold uppercase">Visión</h3>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 space-y-4 text-right md:text-left">
                <h3 class="text-gray-800 font-bold uppercase tracking-widest text-sm">Hacia dónde vamos</h3>
                <h2 class="text-3xl font-bold text-gray-900">Liderazgo Nacional</h2>
                <p class="text-gray-600 text-justify leading-relaxed">
                    Como empresa nos proponemos establecer liderazgo en capacitación de capital humano y gestión de procesos de recursos humanos a nivel nacional. 
                    Security Work busca atender con máxima eficiencia los asuntos de seguridad delegados por nuestros clientes.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Nuestros Valores Corporativos</h2>
            <div class="w-24 h-1 bg-red-600 mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6 text-red-600 group-hover:bg-red-600 group-hover:text-white transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Integridad</h3>
                <p class="text-gray-600 text-sm">Actuamos con honestidad y transparencia en cada certificación y proceso formativo.</p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-800 group-hover:bg-gray-800 group-hover:text-white transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Excelencia</h3>
                <p class="text-gray-600 text-sm">Buscamos la perfección en nuestros métodos de enseñanza y atención al cliente.</p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg hover:-translate-y-2 transition duration-300 text-center group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6 text-red-600 group-hover:bg-red-600 group-hover:text-white transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Compromiso</h3>
                <p class="text-gray-600 text-sm">Comprometidos con la seguridad de Chile y el futuro laboral de nuestros estudiantes.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Nuestro Equipo Ejecutivo</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">Profesionales con amplia trayectoria en seguridad pública y privada liderando nuestra estrategia.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto">
            <div class="text-center group">
                <div class="relative w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden border-4 border-gray-100 shadow-xl group-hover:border-red-600 transition duration-300">
                    <img src="{{ asset('img/maria-del-rosario.jpg') }}" alt="Jefe Comercial" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
                </div>
                <h3 class="text-xl font-bold text-gray-900">María del Rosario</h3>
                <p class="text-red-600 font-medium mb-3">Representante Legal</p>
                <p class="text-sm text-gray-500 px-4">
                    Contador Auditor, con amplia trayectoria en la administración de Empresas de Capacitación desde el año 2005. Experta en uso de franquicia tributaria para las capacitaciones y gestión de RRHH. Actualmente se desempeña como Gerente de Administración y Finanzas de Security Work.
                </p>
            </div>
            
            <div class="text-center group">
                <div class="relative w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden border-4 border-gray-100 shadow-xl group-hover:border-red-600 transition duration-300">
                    <img src="{{ asset('img/Eric.png') }}" alt="CEO" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
                </div>
                <h3 class="text-xl font-bold text-gray-900">Eric Contreras</h3>
                <p class="text-red-600 font-medium mb-3">Director Ejecutivo</p>
                <p class="text-sm text-gray-500 px-4">
                    Ingeniero de profesión, con trayectoria desde 2008 en capacitación y consultoría empresarial, actualmente se desempeña en SecurityWork, empresa dedicada a la capacitación en seguridad, con especial foco en cursos OS-10, aportando soluciones formativas alineadas a los estándares de la autoridad y a las necesidades reales de las organizaciones.
                </p>
            </div>

            <div class="text-center group">
                <div class="relative w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden border-4 border-gray-100 shadow-xl group-hover:border-red-600 transition duration-300">
                    <img src="{{ asset('img/maca.jpg') }}" alt="Gerente Operaciones" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-500">
                </div>
                <h3 class="text-xl font-bold text-gray-900">Macarena Cea</h3>
                <p class="text-red-600 font-medium mb-3">Community Manager</p>
                <p class="text-sm text-gray-500 px-4">
                    Diseñadora de profesión, dedicada a las comunicaciones de Security Work desde el año 2017 a la fecha. En la actualidad se desempeña en el cargo de Community Manager de nuestra compañía.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection