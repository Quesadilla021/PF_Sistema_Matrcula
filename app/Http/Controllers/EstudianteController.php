<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes= Estudiante::all();
        return view('Admin.institucion.estudiante', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.institucion.insertar_estudiante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $estudiante = new  Estudiante();
        
        $estudiante->id_tenant=Auth::user()->id_tenant;
        $estudiante->cedula=$request->cedula;
        $estudiante->nombre=$request->nombre;
        $estudiante->apellidos=$request->apellidos;
        $estudiante->telefono=$request->telefono;
        $estudiante->fecha_nacimiento=$request->fecha_nacimiento;
        $estudiante->enfermedad=$request->enfermedades;
        $estudiante->medicamentos=$request->medicamentos;
        $estudiante->save();

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
        $estudiante =  Estudiante::find($id);

        $estudiante->cedula=$request->cedula;
        $estudiante->nombre=$request->nombre;
        $estudiante->apellidos=$request->apellidos;
        $estudiante->telefono=$request->telefono;
        $estudiante->fecha_nacimiento=$request->fecha_nacimiento;
        $estudiante->enfermedad=$request->enfermedades;
        $estudiante->medicamentos=$request->medicamentos;
        $estudiante->save();

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
        $data = Estudiante::find($id);
        $data->delete();

        return back();
    }

    /**
     * IAN
     * SON METODOS SOLO PARA VERIFICAR LAS PANTALLAS, QUITAR PARA CONECTAR BIEN LA GRAFICA CCON EL STORE UPDATE Y ESOS
     *
     */
    public function editar($id){

        $estudiante = Estudiante::find($id);

        return view('Admin.institucion.edit_estudiante', compact('estudiante'));
    }


}
