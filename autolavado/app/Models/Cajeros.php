<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cajeros extends Model
{
    public function  Cajero(){
     return $this->hashOne("App\Models\Cajero");   
    }
    Protected $fillable=["nombre", "apaterno", "amaterno", "direccion", "telefono", "correo", "estatus"];

    use HasFactory;
}
