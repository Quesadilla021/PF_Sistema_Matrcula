<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encargado;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Matricula;
use Illuminate\Http\Request;
use App\Models\Suscripcione;
use Illuminate\Support\Facades\Auth;

class MatriculaController extends Controller
{
/*     public function show()
    {
        $suscribciones = Suscripcione::all();

        return view('Admin Institucion.admin', compact('suscribciones'));

    } */

    public function index(){

        $matriculas= Matricula::all();
        return view('Admin.institucion.matricula', compact('matriculas'));
    }

    public function create(){
        $estudiantes= Estudiante::all();
        $encargados= Encargado::all();
        $grados= Grado::all();
        return view('Admin.institucion.insertar_matricula', compact('estudiantes', 'encargados', 'grados'));
    }

    public function editar($id){
        $matricula = Matricula::find($id);
        $estudiantes= Estudiante::all();
        $encargados = Encargado::all();
        $grados = Grado::all();
        return view('Admin.institucion.edit_matricula', compact('estudiantes', 'encargados', 'grados', 'matricula'));
    }

    public function store(Request $request)
    {
        $matricula = new Matricula();
        
        $matricula->id_tenant=Auth::user()->id_tenant;
        $matricula->id_estudiante=$request->estudiante;
        $matricula->id_encargado=$request->encargado;
        $matricula->id_grado=$request->grado;
        $matricula->fecha=$request->fecha;
        $matricula->save();

        return back();
    }


    public function destroy($id)
    {
        $data = Matricula::find($id);
        $data->delete();

        return back();
    }

    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        
        $matricula->id_estudiante=$request->estudiante;
        $matricula->id_encargado=$request->encargado;
        $matricula->id_grado=$request->grado;
        $matricula->fecha=$request->fecha;
        $matricula->save();

        return back();
    }
}
