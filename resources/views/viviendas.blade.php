<link href="{{ URL::asset('css/table.css') }}" rel="stylesheet">
<body>
<div class="form">
    @include('form')
</div>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Precio</th>
        <th>Superficie</th>
        <th>Habitaciones</th>
        <th>Año de construcción</th>
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
        <th>
            @if($vivienda->amueblado == true)
            Sí
            @else
            No
            @endif
        </th>
        <th>{{$vivienda->propietario->nombre}}</th>
    </tr>
    @endforeach
</table>
</body>