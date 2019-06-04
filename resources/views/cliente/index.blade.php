@extends ('layouts.admin')
@section ('contenido')
 @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
 <a href="{{url('cliente/create')}}"><i class="fa fa-folder"></i>Crear</a>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">email </th>
              <th scope="col">Telefono </th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cliente as $client)
            <tr>
              <th scope="row">{{$client->id}}</th>
              <td><a href="/cliente/{{$client->id}}">{{$client->name}}</a></td>
              <td>{{$client->email}}</td>
              <td>{{$client->tel}}</td>
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('cliente/' . $client->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Editar</button>
                  </a>&nbsp;
              
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                 {!!Form::open(['route'=>['cliente.destroy',$client->id],
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





@endsection