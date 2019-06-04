@extends ('layouts.admin')
@section ('contenido')

          <h1>Detalle de categoría {{ $categoria->nombreC }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Nombre:</strong> {{ $categoria->nombreC }}<br>
            <strong>Descripción:</strong> {{ $categoria->descripcion }}
        </p>
    </div>


@endsection