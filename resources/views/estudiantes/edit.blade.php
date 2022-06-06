@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="{{route('estudiantes.update', $estudiante->id)}} " method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Editar Estudiante {{$estudiante->id}} </h2>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Nombre" name="nombre" value="{{$estudiante->nombre}} ">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Apellido" name="apellido" value="{{$estudiante->apellido}} ">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Genero" name="genero" value="{{$estudiante->genero}} ">
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Grado" name="grado" value="{{$estudiante->grado}} ">
    <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-600">Enviar</button>
</form>

@endsection