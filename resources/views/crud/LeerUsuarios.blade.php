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
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> id}}</td>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> nombre_user}}</td>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> cedula_user}}</td>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> num_telefono}}</td>
                    <td class="px-6 py-3 bg-gray-50 dark:bg-gray-800">{{$usuario -> direccion_user}}</td>
                    <td>  <a href="{{route('editar.index', $usuario->id)}}">EDITAR</a>

                        <form method="post" action="{{route('eliminar.index', $usuario->id)}}">
                            @csrf

                            {{method_field('DELETE')}}
                            <input type="submit" value="Delete" class="shadow-inner bg-current text-inherit cursor-pointer">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    </div>

@endsection
