h1>Listado Ventas</h1>
<table class="table table-light">
    <thead class="thead-ligth">
        <tr>
        <th>#</th>
        <th>Fecha</th>
        <th>Id Vehiculo</th>
        <th>Id Servicio</th>
        <th>Id Trabajador</th>
        <th>Estatus</th>
        <th>Editar Y Eliminar</th>
</tr>
</thead>
<tbody>
    @foreach($ventas as $venta)
    <tr>
        <td>{{$venta->idventas}}</td>
        <td>{{$venta->fecha}}</td>
        <td>{{$venta->idvehiculo}}</td>
        <td>{{$venta->idservicio}}</td>
        <td>{{$venta->idtrabajador}}</td>
        <td>{{$venta->estatus}}</td>
        <td>Editar y Eliminar</td>
</tr>
@endforeach
</tbody>
</table>
