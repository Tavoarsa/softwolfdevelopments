@extends ('layouts.admin')
@section ('contenido')

          <h1>Detalle de la Finca {{ $finca->nombre }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Nombre:</strong> {{ $finca->nombreF }}<br>
            <strong>Detalle:</strong> {{ $finca->descripcionF }}
        </p>
    </div>


@endsection