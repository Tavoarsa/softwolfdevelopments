@extends ('layouts.admin')
@section ('contenido')
 
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción </th>              
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categorias as $cate)
            <tr>
              <th scope="row">{{$cate->id}}</th>
              <td><a href="/categoria/{{$cate->id}}">{{$cate->nombreC}}</a></td>
              <td>{{$cate->descripcion}}</td>
              
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('categoria/' . $cate->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Editar</button>
                  </a>&nbsp;
              
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                 {!!Form::open(['route'=>['categoria.destroy',$cate->id],
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

    {{ $categorias->render()}}




@endsection