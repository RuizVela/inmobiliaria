<form method="GET" action="/viviendas">
    @csrf
    <label>Precio minimo</label>
    <input required type="number" name="minimo">
    <br>
    <label>Precio máximo</label>
    <input required type="number" name="maximo">
    <br>
    <label>Numero de habitaciones</label>
    <input required type="number" name="habitaciones">
    <br>
    <label>Fecha de construcción</label>
    <input required type="date" name="construccion">
<input type="submit" value="Buscar">
</form>