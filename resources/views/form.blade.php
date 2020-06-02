<link href="{{ URL::asset('css/form.css') }}" rel="stylesheet">
<form method="GET" action="viviendas">
    @csrf
    <label>Precio minimo</label>
    <input  type="number" name="minimo">
    <br>
    <label>Precio máximo</label>
    <input  type="number" name="maximo">
    <br>
    <label>Numero de habitaciones</label>
    <input  type="number" name="habitaciones">
    <br>
    <label>Año de construcción</label>
    <input  type="number" name="construccion">
<input type="submit" value="Buscar">
</form>