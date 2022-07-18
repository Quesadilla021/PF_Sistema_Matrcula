<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encargado;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados= Encargado::all();
        return view('Admin.institucion.encargados', compact('encargados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes=Estudiante::all();
        return view('Admin.institucion.insertar_encargado', compact('estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encargado = new  Encargado();
        
        $encargado->id_tenant=Auth::user()->id_tenant;
        $encargado->id_estudiante=$request->estudiantes;
        $encargado->cedula=$request->cedula;
        $encargado->nombre=$request->nombre;
        $encargado->apellidos=$request->apellidos;
        $encargado->direccion=$request->direccion;
        $encargado->fecha_nacimiento=$request->fecha_nacimiento;
        $encargado->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $encargado = Encargado::find($id);
        
        $encargado->id_estudiante=$request->estudiantes;
        $encargado->cedula=$request->cedula;
        $encargado->nombre=$request->nombre;
        $encargado->apellidos=$request->apellidos;
        $encargado->direccion=$request->direccion;
        $encargado->fecha_nacimiento=$request->fecha_nacimiento;
        $encargado->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Encargado::find($id);
        $data->delete();

        return back();
    }


    
    /**
     * IAN
     * SON METODOS SOLO PARA VERIFICAR LAS PANTALLAS, QUITAR PARA CONECTAR BIEN LA GRAFICA CCON EL STORE UPDATE Y ESOS
     *
     */
    public function editar($id){

        $encargado = Encargado::find($id);
        $estudiantes=Estudiante::all();

        return view('Admin.institucion.edit_encargado', compact('encargado', 'estudiantes'));
    }

}
