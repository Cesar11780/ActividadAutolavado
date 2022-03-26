h1>Listado Servicios</h1>
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
