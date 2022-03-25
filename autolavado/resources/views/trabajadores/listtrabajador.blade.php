<h1>Listado Trabajadores</h1>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<table class="table table-light">
    <thead class="thead-ligth">
        <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th>Estatus</th>
        <th>Contraseña</th>
        <th>Editar y Eliminar</th>
</tr>
</thead>
<tbody>
    @foreach($trabajadores as $trabajador)
    <tr>
        <td>{{$trabajador->idtrabajador}}</td>
        <td>{{$trabajador->nombre}}</td>
        <td>{{$trabajador->apaterno}}</td>
        <td>{{$trabajador->amaterno}}</td>
        <td>{{$trabajador->direccion}}</td>
        <td>{{$trabajador->telefono}}</td>
        <td>{{$trabajador->correo}}</td>
        <td>{{$trabajador->tipo}}</td>
        <td>{{$trabajador->estatus}}</td>
        <td>{{$trabajador->contrasena}}</td>
        <td>Editar y Eliminar</td>
</tr>
@endforeach
</tbody>
</table>
