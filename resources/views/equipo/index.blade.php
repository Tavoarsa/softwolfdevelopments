@extends ('layouts.admin')
@section ('contenido')
  <a href="{{url('equipo/create')}}"><i class="fa fa-folder"></i>Crear</a>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
               <th scope="col">Descripción </th> 
              <th scope="col">Finca </th> 
                            
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach($equipos as $equip)
            <tr>
              <th scope="row">{{$equip->id}}</th>
              <td><a href="/equipo/{{$equip->id}}">{{$equip->nombreE}}</a></td>
              <td>{{$equip->descripcionE}}</td>              
              <td>{{$equip->nombreF}}</td>
              
              
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('/equipo/' . $equip->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Editar</button>
                  </a>&nbsp;
              
              </div>
             <!-- <div class="btn-group" role="group" aria-label="Basic example">
                 {!!Form::open(['route'=>['equipo.destroy',$equip->id],
                  'method'=>'DELETE'])!!}
                    <button class="btn btn-sm btn-danger">
                      Eliminar
                    </button> 
                  {!!Form::close()!!}  
              </div>-->
              
            </td>
          
            </tr>
            @endforeach
          </tbody>
        </table>

    {{ $equipos->render()}}




@endsection