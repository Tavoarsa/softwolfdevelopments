@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<h1>Editar Finca</h1>
    <hr>
     <form action="{{url('equipo', [$equipo])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div hidden="true" class="form-group">
        <label for="id">ID</label>
        <input type="text" value="{{$equipo->id}}" class="form-control" id="id"  name="id" >
      </div>

      <div class="form-group">
        <label for="nombreE">Nombre</label>
        <input type="text" value="{{$equipo->nombreE}}" class="form-control" id="nombreE"  name="nombreE" >
      </div>
       <div class="form-group">
        <label for="descripcionE">Detalle</label>
        <input type="text" value="{{$equipo->descripcionE}}" class="form-control" id="descripcionE" name="descripcionE" >
      </div>

      <div class="form-group">
        <label for="usuario">Finca</label>
        {!! Form::select('finca',$fincas,$equipo->finca_id,["class" => "form-control"])!!}
      </div>
      <div class="form-group">
        <label for="categoriaE">Categoria</label>
        <input type="text" value="{{$equipo->categoriaE}}" class="form-control" id="categoriaE" name="categoriaE" >
      </div>
      <div class="form-group">
        <label for="serie">Serie</label>
        <input type="text" value="{{$equipo->serie}}" class="form-control" id="serie" name="serie" >
      </div>
      <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" value="{{$equipo->modelo}}" class="form-control" id="modelo" name="modelo" >
      </div>
      <div class="form-group">
        <label for="puestos">Puestos</label>
        <input type="text" value="{{$equipo->puestos}}" class="form-control" id="puestos" name="puestos" >
      </div>
      
      

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

</div>
@endsection