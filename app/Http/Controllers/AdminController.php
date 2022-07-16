<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function show()
    {
        $usuarios = User::all();

        return view('Admin.administrador.usuarios', compact('usuarios'));
    } 



    public function inicio()
    {

        return view('Admin.administrador.inicio');
    }

    public function grado()
    {

        return view('Admin.administrador.grados');
    }

    
    public function editar_grado()
    {

        return view('Admin.administrador.edit_grados');
    }
}
