<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    protected $table = 'encargados';
    protected $primaryKey = 'id_encargado';
    public $timestamps = false;
 
    use HasFactory;
}
