@extends('layout.app')

@section('contenido')

    <div class="">
        <form action="{{route('logear')}}"  method="post"  class="md:flex">
            @csrf
            <div>
                <label>Correo</label>
                <input type="email" name="email" id="email" class="border">
                @error('email')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div>
                <label>contraseña</label>
                <input type="password" name="password" id="password" class="border">
                @error('password')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
        @if(session('mensaje'))
            <p class="">{{session('mensaje')}}</p>
        @endif
    </div>

@endsection
