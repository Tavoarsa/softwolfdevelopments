@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<h1>Editar Cliente</h1>
    <hr>
     <form action="{{url('cliente', [$cliente])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div hidden="true" class="form-group">
        <label for="id">ID</label>
        <input type="text" value="{{$cliente->id}}" class="form-control" id="id"  name="id" >
      </div>

      <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" value="{{$cliente->name}}" class="form-control" id="name"  name="name" >
      </div>
       <div class="form-group">
        <label for="tipo_indetif">Tipo identificación</label>
        <input type="text" value="{{$cliente->tipo_indetif}}" class="form-control" id="tipo_indetif" name="tipo_indetif" >
      </div>
      <div class="form-group">
        <label for="num_identif">Número de identificación</label>
        <input type="text" value="{{$cliente->num_identif}}" class="form-control" id="num_identif" name="num_identif" >
      </div>

      <div class="form-group">
        <label for="email">Correo</label>
        <input type="text" value="{{$cliente->email}}" class="form-control" id="email" name="email" >
      </div>

      <div class="form-group">
        <label for="nombre_comercial">Nombre Comercial</label>
        <input type="text" value="{{$cliente->nombre_comercial}}" class="form-control" id="nombre_comercial"  name="nombre_comercial" >
      </div>
      <div class="form-group">
        <label for="provincia">Provincia</label>
        <input type="text" value="{{$cliente->provincia}}" class="form-control" id="provincia"  name="provincia" >
      </div>
      <div class="form-group">
        <label for="canton">Canton</label>
        <input type="text" value="{{$cliente->canton}}" class="form-control" id="canton"  name="canton" >
      </div>
      <div class="form-group">
        <label for="distrito">Distrito</label>
        <!--{!!Form::select('distrito',$cliente, $cliente->distrito, ['class' => 'form-control'])!!}-->
        <input type="text" value="{{$cliente->distrito}}" class="form-control" id="distrito"  name="distrito" >
      </div>
      <div class="form-group">
        <label for="barrio">Barrio</label>
        <input type="text" value="{{$cliente->barrio}}" class="form-control" id="barrio"  name="barrio" >
      </div>
      <div class="form-group">
        <label for="otras_senas">Otras Señas</label>
        <input type="text" value="{{$cliente->otras_senas}}" class="form-control" id="otras_senas"  name="otras_senas" >
      </div>
      
      <div class="form-group">
        <label for="tel">Telefono</label>
        <input type="text" value="{{$cliente->tel}}" class="form-control" id="tel"  name="tel" >
      </div>
      
      <div class="form-group">
        <label for="fax">Fax</label>
        <input type="text" value="{{$cliente->fax}}" class="form-control" id="fax"  name="fax" >
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