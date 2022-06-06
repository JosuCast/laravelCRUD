@extends('layouts.app')

@section('title', 'Home')

@section('content')





<div >
    <div class="bg-gray-100">
      <nav class="h-16 flex justify-end py-4 px-16">
        <a href="{{route('estudiantes.create')}} " class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-600">Crear</a>
      </nav>
      <br>
    </div>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <table class="table-fixed w-full">
        <thead>
          <tr class="bg-indigo-500 text-white">
            <th class="w-20 py-4 ...">ID</th>
            <th class="w-1/8 py-4 ...">Nombre</th>
            <th class="w-1/8 py-4 ...">Apellido</th>
            <th class="w-1/8 py-4 ...">Genero</th>
            <th class="w-1/8 py-4 ...">Grado</th>
            <th class="w-30 py-4 ...">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $row)
                
            
          <tr>
            <td class="py-3 px-6">{{$row->id}}</td>
            <td class="p-3 text-center">{{$row->nombre}}</td>
            <td class="p-3 text-center">{{$row->apellido}}</td>
            <td class="p-3 text-center">{{$row->genero}}</td>
            <td class="p-3 text-center">{{$row->grado}}</td>
            <td class="p-3 flex justify-center">
              <form action="{{route('estudiantes.destroy', $row->id)}}  " method="POST">
                @csrf
                @method('delete')
                <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                <i class="fas fa-trash"></i></button>
              </form>
              <form action="">

              </form>
              <a href="{{route('estudiantes.edit', $row->id)}} " class="bg-green-500 text-white px-3 py-1 rounded-sm">
              <i class="fas fa-pen"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
</div>

@endsection