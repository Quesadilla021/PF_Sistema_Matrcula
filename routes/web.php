<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EncargadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

/* Route::get('/adminInstitucion', function () {
    return view('Admin Institucion.admin');
})->name('indexAdmin'); */



/* RUTAS PROVICIONALES QUITAR SI SON NECESARIAS PARA CONECTAR CON LOS METODOS DE LOS CONTROLADORES, 
BORRAR METODOS PROVICIONALES AL FINAL DE LOS CONTROLADORES*/ 

Route::get('/estudiantes',[EstudianteController::class, 'index'])->name('estudiantes');
Route::get('/insertar_estudiante',[EstudianteController::class, 'create'])->name('create_estudiantes');
Route::get('/edit_estudiante',[EstudianteController::class, 'editar'])->name('editar_estudiantes');

Route::get('/encargados',[EncargadoController::class, 'index'])->name('encargados');
Route::get('/insertar_encargado',[EncargadoController::class, 'create'])->name('create_encargado');
Route::get('/edit_encargado',[EncargadoController::class, 'editar'])->name('editar_encargados');

Route::get('/matricula',[MatriculaController::class, 'index'])->name('matriculas');
/* RUTAS PROVICIONALES QUITAR SI SON NECESARIAS PARA CONECTAR CON LOS METODOS DE LOS CONTROLADORES*/






Route::get('/usuarios',[AdminController::class, 'show'])->name('usuariosRegistrados');

Route::get('/adminInstitucion', [MatriculaController::class, 'show'])->name('indexAdmin');


Route::get('/registrarse', function () {
    return view('registroCuenta');
});

Route::get('/loginC', function () {
    return view('loginCuenta');
})->name('loginn');

Route::get('/admin', function () {
    return view('Admin.admin');
})->name('indexAdmin_A');





//C:\Users\yansi\OneDrive\Documentos\GitHub\PF_Sistema_Matrcula\resources\views\Admin\institucion\adm_institucion.blade.php

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
