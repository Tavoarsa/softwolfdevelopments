@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<h1>Editar Finca</h1>
    <hr>
     <form action="{{url('finca', [$finca])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div hidden="true" class="form-group">
        <label for="id">ID</label>
        <input type="text" value="{{$finca->id}}" class="form-control" id="id"  name="id" >
      </div>

      <div class="form-group">
        <label for="nombreF">Nombre</label>
        <input type="text" value="{{$finca->nombreF}}" class="form-control" id="nombreF"  name="nombreF" >
      </div>
       <div class="form-group">
        <label for="descripcionF">Detalle</label>
        <input type="text" value="{{$finca->descripcionF}}" class="form-control" id="descripcionF" name="descripcionF" >
      </div>

      <div class="form-group">
        <label for="usuario">Categoria</label>
        {!! Form::select('usuario',$usuarios,$finca->id_user,["class" => "form-control"])!!}
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