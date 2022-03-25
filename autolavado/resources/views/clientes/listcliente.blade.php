<h1>Listado Clientes</h1>
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
        <th>Fecha de Registro</th>
        <th>Estatus</th>
        <th>Editar Y Eliminar</th>
</tr>
</thead>
<tbody>
    @foreach($clientes as $cliente)
    <tr>
        <td>{{$cliente->idcliente}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->apaterno}}</td>
        <td>{{$cliente->amaterno}}</td>
        <td>{{$cliente->direccion}}</td>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->correo}}</td>
        <td>{{$cliente->fechareg}}</td>
        <td>{{$cliente->estatus}}</td>
        <td>Editar y Eliminar</td>
</tr>
@endforeach
</tbody>
</table>

