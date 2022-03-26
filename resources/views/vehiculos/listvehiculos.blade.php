<h1>Listado Vehiculos</h1>
<table class="table table-light">
    <thead class="thead-ligth">
        <tr>
        <th>#</th>
        <th>Matricula</th>
        <th>Tipo </th>
        <th>Modelo </th>
        <th>Color</th>
        <th>Puertas</th>
        <th>Estatus</th>
        <th>Id Cliente</th>
        <th>Fecha Registro</th>
        <th>#</th>
</tr>
</thead>
<tbody>
    @foreach($vehiculos as $vehiculo)
    <tr>
        <td>{{$vehiculo->idcliente}}</td>
        <td>{{$vehiculo->matricula}}</td>
        <td>{{$vehiculo->tipo}}</td>
        <td>{{$vehiculo->marca}}</td>
        <td>{{$vehiculo->modelo}}</td>
        <td>{{$vehiculo->color}}</td>
        <td>{{$vehiculo->puertas}}</td>
        <td>{{$vehiculo->status}}</td>
        <td>{{$vehiculo->idcliente}}</td>
        <td>{{$vehiculo->fechareg}}</td>
        <td>Editar y Eliminar</td>
</tr>
@endforeach
</tbody>
</table>
