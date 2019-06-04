@extends ('layouts.admin')
@section ('contenido')

   <h1>Nueva Equipo</h1>
    <hr>
     <form action="/equipo" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="nombreE">Nombre</label>
        <input type="text" class="form-control" id="nombreE"  name="nombreE">
      </div>
      <div class="form-group">
        <label for="descripcionE">Detalle</label>
        <input type="text" class="form-control" id="descripcionE" name="descripcionE">
      </div>

      <div class="form-group">
        <label for="finca">Finca</label>
              <select name="finca"  id="finca"  >
                @foreach($fincas as $fin)
                <option value="{{$fin->id}}">{{$fin->nombreF}}</option>
                @endforeach               
              </select>
      </div>
      <div class="form-group">
        <label for="categoriaE">Categoria</label>
        <input type="text" class="form-control" id="categoriaE" name="categoriaE">
      </div>
      <div class="form-group">
        <label for="serie">Serie</label>
        <input type="text" class="form-control" id="serie" name="serie">
      </div>
      <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo">
      </div>
      <div class="form-group">
        <label for="puestos">Puestos</label>
        <input type="text" class="form-control" id="puestos" name="puestos">
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
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>



@endsection