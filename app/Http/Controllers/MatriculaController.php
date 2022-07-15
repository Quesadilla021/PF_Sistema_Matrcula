<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use Illuminate\Http\Request;
use App\Models\Suscripcione;


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

        return view('Admin.institucion.insertar_matricula');
    }

    public function editar(){

        return view('Admin.institucion.edit_matricula');
    }

}
