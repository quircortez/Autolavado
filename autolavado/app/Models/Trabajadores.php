<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    public function  Trabajador(){
     return $this->hashOne("App\Models\Cajero");
    }
    Protected $fillable=["nombre", "apaterno", "amaterno", "direccion", "telefono", "correo", "estatus","contrasena"];

    use HasFactory;
}
