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
        if (Auth::user()->rol == 'Admin') {
            return view('Admin.administrador.inicio');
        }
        $matriculas = Auth::user()->matriculas;
        $grados = Grado::all();
        return view('Admin.institucion.inicio', compact('matriculas', 'grados'));
    }
}
