@extends('layout.app')


@section('titulo-pagina')

    editar usuarios

@endsection


@section('contenido')


    <div class="flex justify-center">

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">

        <form action="{{route('actualizar',$usuario->id)}}" method="post">
            @csrf
          @method('PUT')
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Nombre : {{$usuario->nombre_user}}</label>
                <input type="text" id="nombre" name="nombre" value="{{$usuario -> nombre_user}}" class="border p-3 w-full rounded-lg">
                @error('nombre')
                <p>{{$message}}</p>
                @enderror

            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Cedula</label>
                <input type="number" id="cedula" name="cedula" value="{{$usuario-> cedula_user}}" class="border p-3 w-full rounded-lg">
                @error('cedula')
                <p>{{$message}}</p>
                @enderror

            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Telefono</label>
                <input type="number" id="telefono" name="telefono" value="{{$usuario -> num_telefono}}" class="border p-3 w-full rounded-lg">
                @error('telefono')
                <p>{{$message}}</p>
                @enderror

            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold">Direccion</label>
                <input type="text" id="direccion" name="direccion" value="{{$usuario -> direccion_user}}" class="border p-3 w-full rounded-lg">
                @error('direccion')
                <p>{{$message}}</p>
                @enderror

            </div>


            <input type="submit" value="Acualizar" class="bg-sky-600 hover:bg-sky-900 transition-colors cursor-pointer
             uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
    </div>

    </div>


@endsection
