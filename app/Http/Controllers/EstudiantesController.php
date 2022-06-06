<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
class EstudiantesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $estudiantes = Estudiante::all();

        return view('estudiantes.index',compact('estudiantes'));
    }

    public function create(){
        return view('estudiantes.create');
    }

    public function store(Request $request){
        
        $estudiante = new Estudiante();

        $estudiante -> nombre = $request->nombre;
        $estudiante ->apellido = $request->apellido;
        $estudiante ->genero = $request->genero;
        $estudiante ->grado = $request->grado;

        $estudiante ->save();

        return redirect()->route('estudiantes.index');
    }

    public function edit($id){

        $estudiante = Estudiante::find($id);

        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, $id){

        $estudiante = Estudiante::find($id);

        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index');
    }

    public function destroy($id){
        $estudiante = Estudiante::find($id);

        $estudiante->delete();

        return redirect()->route('estudiantes.index');
    }
}
