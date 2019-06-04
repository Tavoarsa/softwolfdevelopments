@extends ('layouts.admin')
@section ('contenido')

   <h1>Nueva Finca</h1>
    <hr>
     <form action="/finca" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="nombreF">Nombre</label>
        <input type="text" class="form-control" id="nombreF"  name="nombreF">
      </div>
      <div class="form-group">
        <label for="descripcionF">Detalle</label>
        <input type="text" class="form-control" id="descripcionF" name="descripcionF">
      </div>

      <div class="form-group">
        <label for="usuario">Usuario</label>
              <select name="usuario"  id="usuario"  >
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach               
              </select>
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