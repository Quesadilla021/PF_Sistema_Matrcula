<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos= Pago::all();
        return view('Admin.institucion.pago', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matriculas = Matricula::all();
        return view('Admin.institucion.insertar_pago', compact('matriculas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago = new Pago();
        
        $pago->id_tenant=Auth::user()->id_tenant;
        $pago->id_matricula=$request->matricula;
        $pago->metodo_pago=$request->metodoPago;
        $pago->total=$request->total;

        $pago->save();

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pago::find($id);
        $data->delete();

        return back();
    }


    /**
     * METODO PARA RUTA PROVICIONAL

     */



    public function editar(){

        return view('Admin.institucion.edit_pago');
    }
}
