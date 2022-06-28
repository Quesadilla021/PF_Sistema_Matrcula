<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatriculaController;


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

Route::get('/adminInstitucion', [MatriculaController::class, 'show'])->name('indexAdmin');


Route::get('/registrarse', function () {
    return view('registroCuenta');
});

Route::get('/loginC', function () {
    return view('loginCuenta');
})->name('loginn');

Route::get('/admin_Administrador', function () {
    return view('Admin Administrador.admin');
})->name('indexAdmin_A');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
