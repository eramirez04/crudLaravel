@extends('layout.app')


@section('titulo-pagina')

    registro de usuarios

@endsection


@section('contenido')

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">

        <form action="" method="post">
            @csrf

            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="border p-3 w-full rounded-lg">
                @error('nombre')
                <p>{{$message}}</p>
                @enderror

            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Cedula</label>
                <input type="number" id="cedula" name="cedula" class="border p-3 w-full rounded-lg">
                @error('cedula')
                <p>{{$message}}</p>
                @enderror

            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Telefono</label>
                <input type="number" id="telefono" name="telefono" class="border p-3 w-full rounded-lg">
                @error('telefono')
                <p>{{$message}}</p>
                @enderror

            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Direccion</label>
                <input type="text" id="direccion" name="direccion" class="border p-3 w-full rounded-lg">
                @error('direccion')
                <p>{{$message}}</p>
                @enderror

            </div>


            <input type="submit" value="Registrar" class="bg-sky-600 hover:bg-sky-900 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

        </form>

    </div>




@endsection
