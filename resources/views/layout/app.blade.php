
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
            <a href="{{ route('registro.index') }}" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200" >Crear Cuenta</a>

            <a href="{{route('usuarios.index')}}">Registros de Usuarios</a>

        </header>

        <main>
            @yield('contenido')
        </main>

        <footer>

        </footer>


    </boyd>

</html>
