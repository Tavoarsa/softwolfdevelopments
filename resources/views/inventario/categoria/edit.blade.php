@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<h1>Editar Categoría</h1>
    <hr>
     <form action="{{url('categoria', [$categoria])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div hidden="true" class="form-group">
        <label for="id">ID</label>
        <input type="text" value="{{$categoria->id}}" class="form-control" id="id"  name="id" >
      </div>

      <div class="form-group">
        <label for="nombreC">Nombre</label>
        <input type="text" value="{{$categoria->nombreC}}" class="form-control" id="nombreC"  name="nombreC" >
      </div>
       <div class="form-group">
        <label for="descripcion"></label>
        <input type="text" value="{{$categoria->descripcion}}" class="form-control" id="descripcion" name="descripcion" >
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection