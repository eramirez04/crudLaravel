@extends('layout.app')

@section('titulo-pagina')

    vista de usuarios
@endsection

@section('contenido')
    <div >
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-4">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th >ID</th>
                <th >Nombre</th>
                <th >Cedula</th>
                <th >Numero de Telefono</th>
                <th >Direccion</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)

                <tr>
                    <td class="px-9 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> id}}</td>
                    <td class="px-8 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> nombre_user}}</td>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> cedula_user}}</td>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> num_telefono}}</td>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> direccion_user}}</td>
                    <td>  <a href="{{route('editar.index', $usuario->id)}}"
                             class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900"
                        >
                            EDITAR</a>

                        <form method="post" action="{{route('eliminar.index', $usuario->id)}}">
                            @csrf

                            {{method_field('DELETE')}}
                            <input type="submit" value="Delete" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$usuarios->links()}}

    </div>

@endsection
