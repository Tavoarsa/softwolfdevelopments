@extends ('layouts.admin')
@section ('contenido')

       <h1>Detalle del cliente: {{ $cliente->name }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Nombre:</strong> {{ $cliente->name }}<br>
            <strong>E-mail:</strong> {{ $cliente->email }}
        </p>
    </div>
@endsection