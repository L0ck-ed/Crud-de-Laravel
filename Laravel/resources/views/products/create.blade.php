<h1>Crear producto</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>Descripción:</label>
    <input type="text" name="description">

    <br><br>

    <label>Precio:</label>
    <input type="number" step="0.01" name="price">

    <br><br>

    <label>Stock:</label>
    <input type="number" name="stock">

    <br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('products.index') }}">Volver</a>