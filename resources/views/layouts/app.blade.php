<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Security Work</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                animation: {
                    'scroll': 'scroll 40s linear infinite', // 40s es la velocidad (más alto = más lento)
                },
                keyframes: {
                    scroll: {
                        '0%': { transform: 'translateX(0)' },
                        '100%': { transform: 'translateX(-50%)' }, // Se mueve hasta la mitad (porque duplicaremos el contenido)
                    }
                }
            }
        }
    }
</script>

</html>