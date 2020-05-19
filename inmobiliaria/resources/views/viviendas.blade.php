<table class="table">
    <tr>
        <th>Id</th>
        <th>Precio</th>
        <th>Superficie</th>
        <th>Habitaciones</th>
        <th>Fecha de construcción</th>
        <th>Amueblado</th>
        <th>Propietario</th>
    </tr>
    @foreach($viviendas as $vivienda)
    <tr>
        <th>{{$vivienda->id}}</th>
        <th>{{$vivienda->precio}}€</th>
        <th>{{$vivienda->superficie}}m2</th>
        <th>{{$vivienda->habitaciones}}</th>
        <th>{{$vivienda->construcción}}</th>
        <th>{{$vivienda->amueblado}}</th>
        <th>{{$vivienda->propietario_id}}</th>
    </tr>
    @endforeach
</table>