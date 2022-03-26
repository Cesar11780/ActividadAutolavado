<h1>Listado Empleados</h1>
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
