<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';
    public $timestamps = false;

    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'id_estudiante');
    }

    use HasFactory;
}

