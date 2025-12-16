@extends('layouts.app')

@section('content')

<section class="bg-gray-800 text-white py-16 text-center">
    <div class="container mx-auto px-4">
        {{-- Título dinámico: dirá "Cursos de Ofimática" o "Áreas de Especialización" --}}
        <h1 class="text-4xl font-bold mb-4">{{ $titulo }}</h1>
        
        {{-- Si estamos filtrando, mostramos botón para volver --}}
        @if(request()->route('categoria'))
            <a href="{{ route('areas') }}" class="text-red-400 hover:text-white underline mt-2 inline-block">
                ← Ver todas las áreas
            </a>
        @endif
    </div>
</section>

<section class="py-16 bg-white min-h-screen">
    <div class="container mx-auto px-4">
        
        {{-- Recorremos las categorías que nos mandó la ruta (puede ser 1 o todas) --}}
        @foreach($cursosMostrar as $nombreArea => $listaCursos)
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-red-600 border-b-2 border-gray-200 pb-2 mb-6 uppercase">
                    {{ $nombreArea }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($listaCursos as $curso)
                        <div class="bg-gray-50 p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-red-600">
                            <h3 class="font-bold text-gray-800 text-lg mb-2">{{ $curso }}</h3>
                            <p class="text-sm text-gray-500">Modalidad Online / Presencial</p>
                            <button class="mt-4 text-red-600 font-semibold text-sm hover:underline">
                                Solicitar información →
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</section>

@endsection