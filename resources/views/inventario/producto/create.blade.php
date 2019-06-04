@extends ('layouts.admin')
@section ('contenido')

   <h1>Nueva Producto</h1>
    <hr>
     <form action="/producto" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="nombreP">Nombre</label>
        <input type="text" class="form-control" id="nombreP"  name="nombreP">
      </div>
      <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" class="form-control" id="cantidad" name="cantidad">
      </div>

      <div class="form-group">
        <label for="categoria">Categoria</label>
              <select name="categoria"  id="categoria"  >
                @foreach($categorias as $cate)
                <option value="{{$cate->id}}">{{$cate->nombreC}}</option>
                @endforeach               
              </select>
      </div>
      <div class="form-group">
        <label for="proveedor">Proveedor</label>
        <input type="text" class="form-control" id="proveedor" name="proveedor">
      </div>
      <div class="form-group">
        <label for="precioCompra">Precio Compra</label>
        <input type="text" class="form-control" id="precioCompra" name="precioCompra">
      </div>
      <div class="form-group">
        <label for="precioVenta">Precio Venta</label>
        <input type="text" class="form-control" id="precioVenta" name="precioVenta">
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