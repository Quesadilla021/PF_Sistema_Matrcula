<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;

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
        
        $estudiante->cedula=$request->cedula;
        $estudiante->nombre=$request->nombre;
        $estudiante->apellidos=$request->apellidos;
        $estudiante->telefono=$request->telefono;
        $estudiante->enfermedad=$request->enfermedad;
        $estudiante->medicamentos=$request->medicamentos;
        $estudiante->save();

        return redirect()->route('estudiantes.index');
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
        $estudiante->enfermedad=$request->enfermedad;
        $estudiante->medicamentos=$request->medicamentos;
        $estudiante->save();

        return redirect()->route('estudiantes.index');
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
}
