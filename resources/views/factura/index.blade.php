@extends ('layouts.admin')
@section ('contenido')
 
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#Orden</th>
              <th scope="col">Cedula</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Total</th>                          
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach($facturas as $factura)
            <tr>
              
              <td>{{$factura->otros}}</td>
              <td>{{$factura->receptor_nombre}}</td>
              <td>{{$factura->receptor_num_identif}}</td>
              <td>{{$factura->receptor_email}}</td>
              <td>{{$factura->total_comprobante}}</td>                        
              <td>            
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#">
                      <button type="button" class="btn btn-warning">Facturar</button>
                    </a>&nbsp;              
                </div>
                          
              </td>
          
            </tr>
            @endforeach
          </tbody>
        </table>

    {{ $facturas->render()}}




@endsection