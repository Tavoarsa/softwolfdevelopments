@extends ('layouts.admin')
@section ('contenido')
  <a href="{{url('finca/create')}}"><i class="fa fa-folder"></i>Crear</a>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
               <th scope="col">Descripción </th> 
              <th scope="col">Cliente </th> 
                            
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach($fincas as $fin)
            <tr>
              <th scope="row">{{$fin->id}}</th>
              <td><a href="/finca/{{$fin->id}}">{{$fin->nombreF}}</a></td>
              <td>{{$fin->descripcionF}}</td>              
              <td>{{$fin->name}}</td>
              
              
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('/finca/' . $fin->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Editar</button>
                  </a>&nbsp;
              
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                 {!!Form::open(['route'=>['finca.destroy',$fin->id],
                  'method'=>'DELETE'])!!}
                    <button class="btn btn-sm btn-danger">
                      Eliminar
                    </button> 
                  {!!Form::close()!!}  
              </div>
              
            </td>
          
            </tr>
            @endforeach
          </tbody>
        </table>

    {{ $fincas->render()}}




@endsection