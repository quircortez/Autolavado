<h1>Listado Servicios</h1>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<table class="table table-light">
    <thead class="thead-ligth">
        <tr>
        <th>#</th>
        <th>Descripcion</th>
        <th>Costo</th>
        <th>Estatus</th>
        <th>Fecha de Registro</th>
        <th>Editar Y Eliminar</th>
</tr>
</thead>
<tbody>
    @foreach($servicios as $servicio)
    <tr>
        <td>{{$servicio->idservicios}}</td>
        <td>{{$servicio->descripcion}}</td>
        <td>{{$servicio->costo}}</td>
        <td>{{$servicio->status}}</td>
        <td>{{$servicio->fechareg}}</td>
        <td>Editar y Eliminar</td>
</tr>
@endforeach
</tbody>
</table>
