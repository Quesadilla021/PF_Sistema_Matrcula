<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';
    public $timestamps = false;

    public function matricula(){
        return $this->belongsTo(Matricula::class, 'id_matricula');
    }


    use HasFactory;
}
