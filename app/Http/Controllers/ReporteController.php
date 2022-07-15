<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
  
    public function reporte(){

        return view('Admin.institucion.reporte_pago');
    
    }
}
