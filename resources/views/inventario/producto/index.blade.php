@extends ('layouts.admin')
@section ('contenido')
 
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
               <th scope="col">Cantidad </th> 
              <th scope="col">Categoría </th> 
              <th scope="col">Proveedor </th>
              <th scope="col">Precio Compra </th>               
              <th scope="col">Precio Venta </th>                 
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach($productos as $prod)
            <tr>
              <th scope="row">{{$prod->id}}</th>
              <td><a href="/producto/{{$prod->id}}">{{$prod->nombreP}}</a></td>
              <td>{{$prod->cantidad}}</td>              
              <td>{{$prod->nombreC}}</td>
              <td>{{$prod->proveedor}}</td>
              <td>{{$prod->precioCompra}}</td>
              <td>{{$prod->precioVenta}}</td>
              
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('/producto/' . $prod->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Editar</button>
                  </a>&nbsp;
              
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                 {!!Form::open(['route'=>['producto.destroy',$prod->id],
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

    {{ $productos->render()}}




@endsection