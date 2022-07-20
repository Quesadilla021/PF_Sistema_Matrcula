<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use App\Models\Matricula;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $gradosArray = array('Primero', 'Segundo', 'Tercero','Cuarto', 'Quinto', 'Sexto',
        'Septimo', 'Octavo', 'Noveno','Decimo', 'Undecimo', 'Duodecimo');

        if (Auth::user()->primera_vez == 0) {
            for ($i=0; $i < 12; $i++) { 
                $grado = New Grado();
                $grado->nombre = $gradosArray[$i];
                $grado->id_tenant =  Auth::user()->id_tenant;
                $grado->save();
            }     
            $usuario = User::find(Auth::user()->id_tenant);
            $usuario->primera_vez = 1;
            $usuario->save();

            $matriculas = Auth::user()->matriculas;
            $grados =  Auth::user()->grados;
            return view('Admin.institucion.inicio', compact('matriculas', 'grados'));

        }


        if (Auth::user()->rol == 'Admin') {
            return view('Admin.administrador.inicio');
        }
        $matriculas = Auth::user()->matriculas;
        $grados =  Auth::user()->grados;
        return view('Admin.institucion.inicio', compact('matriculas', 'grados'));
    }
}
