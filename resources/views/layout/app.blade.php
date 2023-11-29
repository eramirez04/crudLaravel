
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo-pagina')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <!-- Styles -->

</head>


    <boyd>

        <header class="flex justify-between p-5 border-b bg-white shadow">
            <h1 class="text-3xl font-black">
                Crud
            </h1>
            <a href="{{ route('registro.index') }}">Crear Cuenta</a>
        </header>

        <main>
            @yield('contenido')
        </main>

        <footer>

        </footer>


    </boyd>

</html>
