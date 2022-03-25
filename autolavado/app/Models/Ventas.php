<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    public function  Cajero(){
     return $this->hashOne("App\Models\Cajero");
    }
    Protected $fillable=["fecha", "id_vehiculo", "id_cajero", "id_servicio", "id_trabajador","estatus"];

    use HasFactory;
}
