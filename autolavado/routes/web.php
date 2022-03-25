<?php

use Illuminate\Support\Facades\Route;

use App\Models\Clientes;
use App\Models\Vehiculos;
use App\Models\Trabajadores;
use App\Models\Servicios;
use App\Models\Ventas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'rcliente'])->name('clientevista');

Route::get('/clientes', [App\Http\Controllers\Cliente::class, 'index']);
Route::get('/trabajadores', [App\Http\Controllers\Trabajador::class, 'index']);
Route::get('/vehiculos', [App\Http\Controllers\Vehiculo::class, 'index']);
Route::get('/servicios', [App\Http\Controllers\Servicio::class, 'index']);
Route::get('/ventas', [App\Http\Controllers\Venta::class, 'index']);
/*Route::get('/vclientes', function(){
 $cliente=Clientes::all();
 foreach($cliente as $clientes){
     echo "Nombre: ".$clientes->nombre."Apellidos:"
     .$clientes->apaterno."Dirrección"
     .$clientes->direccion."<br>";
 }
});
Route::get('/vtrabajadores', function(){
 $trabajador=Trabajadores::all();
 foreach($trabajador as $trabajadores){
     echo "Nombre: ".$trabajadores->nombre."Apellidos:"
     .$trabajadores->apaterno."Dirrección"
     .$trabajadores->direccion."<br>";
 }
});

Route::get('/vvehiculos', function(){
    $vehiculo=Vehiculos::all();
    foreach($vehiculo as $vehiculos){
        echo "Nombre: ".$vehiculos->nombre."Apellidos:"
        .$vehiculos->apaterno."Dirrección"
        .$vehiculos->direccion."<br>";
    }
   });
*/
