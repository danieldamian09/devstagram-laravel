<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram @yield('titulo')</title>

        @vite('resources/css/app.css')

    </head>
    <body class=" bg-gray-100">
        <header class=" p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class=" text-3xl font-black">DevStagram</h1>

                @auth()
                <nav class="flex items-center gap-2">
                    <a class="text-gray-600 font-bold text-sm" href="#">
                        Hola: 
                        <span class="font-normal">
                            {{auth()->user()->username}}
                        </span>
                    </a>
                    <a class=" uppercase text-gray-600 font-bold text-sm" href="{{ route('register') }}">Cerrar Sesión</a>
                </nav>
                @endauth

                @guest()
                    <nav class="flex items-center gap-2">
                        <a class=" uppercase text-gray-600 font-bold text-sm" href="#">Login</a>
                        <a class=" uppercase text-gray-600 font-bold text-sm" href="{{ route('register') }}">Crear cuenta</a>
                    </nav>
                @endguest
            </div>
        </header>

        <main class=" container mx-auto mt-10">
            {{-- Vamos a inyectar todo el contenido de cada una de las vistas --}}
            <h2 class=" font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>

            @yield('contenido')

        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            DevStagram - todos los derechos reservados {{ now() -> year}}               
        </footer>
    </body>
</html>