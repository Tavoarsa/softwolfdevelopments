@extends ('layouts.admin')
@section ('contenido')
 
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#Orden</th>
              <th scope="col">Fecha Visita</th>
              <th scope="col">Finca</th>
              <th scope="col">Equipo</th>                            
              <th scope="col">Plazo Credito</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ordenes as $orden)
            <tr>
              
              <td><a href="/orden/{{$orden->id}}">{{$orden->orden_num}}</a></td>
              <td>{{$orden->fecha_visita}}</td>
              <td>{{$orden->nombreF}}</td>
              <td>{{$orden->nombreE}}</td>
              <td>{{$orden->plaza_credito}}</td>
              <td>{{$orden->status}}</td>
             
              
              <td>{{$orden->total_orden}}</td>
              
              <td>

              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('getfacturas/' . $orden->id_finca ) }}">
                    <button type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-link"></span>
                    </button>
                  </a>&nbsp;
              
              </div>
         
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('orden/' . $orden->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Editar</button>
                  </a>&nbsp;
              
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                 {!!Form::open(['route'=>['orden.destroy',$orden->id],
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

    {{ $ordenes->render()}}




@endsection