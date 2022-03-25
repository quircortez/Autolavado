<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public function  Cliente(){
     return $this->hashOne("App\Models\Cajero");
    }
    Protected $fillable=["nombre", "apaterno", "amaterno", "direccion", "telefono", "correo","fechareg", "estatus"];

    use HasFactory;
}
