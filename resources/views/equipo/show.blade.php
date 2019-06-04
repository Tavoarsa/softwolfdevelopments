@extends ('layouts.admin')
@section ('contenido')

          <h1>Detalle del Equipo {{ $equipo->nombreE }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Nombre:</strong> {{ $equipo->nombreE }}<br>
            <strong>Detalle:</strong> {{ $equipo->descripcionE }}
        </p>
    </div>


@endsection