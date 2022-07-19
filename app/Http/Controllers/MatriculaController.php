<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encargado;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use PDF;


class MatriculaController extends Controller
{
/*     public function show()
    {
        $suscribciones = Suscripcione::all();

        return view('Admin Institucion.admin', compact('suscribciones'));

    } */

    public function index(Request $request){

        
        $nombre = $request->get('buscarpor');

        $matriculas = Matricula::join('estudiantes', 'estudiantes.id_estudiante', '=', 'matriculas.id_estudiante')
        ->where('estudiantes.nombre', 'like', "%$nombre%")
        ->where('matriculas.id_tenant', 'like', Auth::user()->id_tenant)
        ->paginate(6);                            

        /* $matriculas = Matricula::where('id_estudiante.nombre','like',"%$nombre%")->paginate(6); */

        return view('Admin.institucion.matriculas.matricula', compact('matriculas'));
    }

    public function create(){
        $estudiantes= Auth::user()->estudiantes;
        $encargados= Auth::user()->encargados;
        $grados= Grado::all();
        return view('Admin.institucion.matriculas.insertar_matricula', compact('estudiantes', 'encargados', 'grados'));
    }

    public function editar($id){
        $matricula = Matricula::find($id);
        $estudiantes= Auth::user()->estudiantes;
        $encargados= Auth::user()->encargados;
        $grados = Grado::all();
        return view('Admin.institucion.matriculas.edit_matricula', compact('estudiantes', 'encargados', 'grados', 'matricula'));
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

    public function updateFoto(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        
        if ($request->hasFile('file')){
            $archivo = $request->file->store('imagenes', 'public');
            $url = Storage::url($archivo);
        }

        $matricula->foto =  $url;
        $matricula->save();

        return back();
    }

    public function pdfDescargar($id)
    {
        $matricula = Matricula::findOrFail($id);
        
        $path = public_path();

        $pdf = PDF::loadView('Admin.institucion.matriculas.pdf.pdf', compact('matricula', 'path'));
        return $pdf->download('Reporte - Matricula.pdf');
    }

    /////////////////////

    public function inicio()
{
    $matriculas = Auth::user()->matriculas;
    $grados = Grado::all();
    return view('Admin.institucion.inicio', compact('matriculas', 'grados'));
}
    
public function updateGrado(Request $request, $id)
{
    $grado = Grado::find($id);

    $grado->cantidad = $request->cupo;
    $grado->save();

    return back();
}
}
