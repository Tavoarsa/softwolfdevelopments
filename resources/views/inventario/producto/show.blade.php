@extends ('layouts.admin')
@section ('contenido')

          <h1>Detalle del Producto {{ $producto->nombreP }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Nombre:</strong> {{ $producto->nombreP }}<br>
            <strong>Cantidad:</strong> {{ $producto->cantidad }}
        </p>
    </div>


@endsection