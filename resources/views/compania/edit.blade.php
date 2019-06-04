@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<h1>Editar Compañia</h1>
    <hr>
     <form action="{{url('compania', [$compania])}}" method="POST">
     
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div hidden="true" class="form-group">
        <label for="id">ID</label>
        <input type="text" value="{{$compania->id}}" class="form-control" id="id"  name="id" >
      </div>

      <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" value="{{$compania->name}}" class="form-control" id="name"  name="name" >
      </div>
       <div class="form-group">
        <label for="tipo_indetif">Tipo identificación</label>
        <input type="text" value="{{$compania->tipo_indetif}}" class="form-control" id="tipo_indetif" name="tipo_indetif" >
      </div>
      <div class="form-group">
        <label for="num_identif">Número de identificación</label>
        <input type="text" value="{{$compania->num_identif}}" class="form-control" id="num_identif" name="num_identif" >
      </div>

      <div class="form-group">
        <label for="email">Correo</label>
        <input type="text" value="{{$compania->email}}" class="form-control" id="email" name="email" >
      </div>

      <div class="form-group">
        <label for="nombre_comercial">Nombre Comercial</label>
        <input type="text" value="{{$compania->nombre_comercial}}" class="form-control" id="nombre_comercial"  name="nombre_comercial" >
      </div>
      <div class="form-group">
        <label for="provincia">Provincia</label>
           {!! Form::select('provincia',$provincias,null,['id'=>'provincia'])!!}
      </div>
      <div class="form-group">
        <label for="canton">Canton</label>
        {!! Form::select('canton',['placeholder'=>'Selecciona una provincia'],null,['id'=>'canton'])!!}
      </div>
      <div class="form-group">
        <label for="distrito">Distrito</label>
        {!! Form::select('distrito',['placeholder'=>'Selecciona un canton'],null,['id'=>'distrito'])!!}
      </div>
      <div class="form-group">
        <label for="barrio">Barrio</label>
        {!! Form::select('barrio',['placeholder'=>'Selecciona un Barrio'],null,['id'=>'barrio'])!!}
      </div>
      <div class="form-group">
        <label for="otras_senas">Otras Señas</label>
        <input type="text" value="{{$compania->otras_senas}}" class="form-control" id="otras_senas"  name="otras_senas" >
      </div>
      
      <div class="form-group">
        <label for="tel">Telefono</label>
        <input type="text" value="{{$compania->tel}}" class="form-control" id="tel"  name="tel" >
      </div>
      
      <div class="form-group">
        <label for="fax">Fax</label>
        <input type="text" value="{{$compania->fax}}" class="form-control" id="fax"  name="fax" >
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

</div>
@endsection