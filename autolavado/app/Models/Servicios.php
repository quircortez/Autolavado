<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    public function  Servicio(){
     return $this->hashOne("App\Models\Cajero");   
    }
    Protected $fillable=["descripcion", "costo", "status"];

    use HasFactory;
}
