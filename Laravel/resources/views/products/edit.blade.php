<h1>Editar producto</h1>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Descripción:</label>
    <input type="text" name="description" value="{{ $product->description }}">

    <br><br>

    <label>Precio:</label>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}">

    <br><br>

    <label>Stock:</label>
    <input type="number" name="stock" value="{{ $product->stock }}">

    <br><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('products.index') }}">Volver</a>