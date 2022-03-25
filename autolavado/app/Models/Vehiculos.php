<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    public function  Vehiculo(){
     return $this->hashOne("App\Models\Cajero");
    }
    Protected $fillable=["matricula", "tipo", "marca", "modelo", "color","puertas", "status","fechareg"];

    use HasFactory;
}
