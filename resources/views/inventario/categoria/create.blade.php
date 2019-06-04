@extends ('layouts.admin')
@section ('contenido')

   <h1>Nueva Categoría</h1>
    <hr>
     <form action="/categoria" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="nombreC">Nombre</label>
        <input type="text" class="form-control" id="nombreC"  name="nombreC">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
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



@endsection