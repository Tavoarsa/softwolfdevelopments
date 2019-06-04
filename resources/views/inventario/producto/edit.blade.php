@extends ('layouts.admin')
@section ('contenido')
<div class="container">
<h1>Editar Producto</h1>
    <hr>
     <form action="{{url('producto', [$producto])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div hidden="true" class="form-group">
        <label for="id">ID</label>
        <input type="text" value="{{$producto->id}}" class="form-control" id="id"  name="id" >
      </div>

      <div class="form-group">
        <label for="nombreP">Nombre</label>
        <input type="text" value="{{$producto->nombreP}}" class="form-control" id="nombreP"  name="nombreP" >
      </div>
       <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" value="{{$producto->cantidad}}" class="form-control" id="cantidad" name="cantidad" >
      </div>

      <div class="form-group">
        <label for="categoria">Categoria</label>
        {!! Form::select('categoria',$categorias,$producto->categoria_id,["class" => "form-control"])!!}
      </div>
      <div class="form-group">
        <label for="proveedor">Proveedor</label>
        <input type="text" value="{{$producto->proveedor}}" class="form-control" id="proveedor" name="proveedor" >
      </div>
        <div class="form-group">
        <label for="precioCompra">Precio Compra</label>
        <input type="text" value="{{$producto->precioCompra}}" class="form-control" id="precioCompra" name="precioCompra" >
      </div>
        <div class="form-group">
        <label for="precioVenta">Precio Venta</label>
        <input type="text" value="{{$producto->precioVenta}}" class="form-control" id="precioVenta" name="precioVenta" >
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
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

</div>
@endsection