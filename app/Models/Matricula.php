<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';
    protected $primaryKey = 'id_matricula';
    public $timestamps = false;

    public function estudiante(){
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }

    public function encargado(){
        return $this->belongsTo(Encargado::class, 'id_encargado');
    }

    public function grado(){
        return $this->belongsTo(Grado::class, 'id_grado');
    }

    use HasFactory;
}
