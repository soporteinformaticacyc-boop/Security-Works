@component('mail::message')
# Nueva solicitud de información de curso

**Curso de interés:** {{ $data['curso_interes'] }}

**Nombre:** {{ $data['nombre'] }}  
**Correo:** {{ $data['correo'] }}  
**Teléfono:** {{ $data['telefono'] ?? 'No informado' }}

**Mensaje:**

@if(!empty($data['mensaje']))
{{ $data['mensaje'] }}
@else
Sin mensaje adicional.
@endif

@endcomponent