<h1>Detalle del producto</h1>

<p><strong>Descripción:</strong> {{ $product->description }}</p>
<p><strong>Precio:</strong> ${{ $product->price }}</p>
<p><strong>Stock:</strong> {{ $product->stock }}</p>

<a href="{{ route('products.index') }}">Volver</a>