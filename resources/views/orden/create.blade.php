@extends ('layouts.admin')
@section ('contenido')
 

<style type="text/css">
    form{
        margin: 20px 0;
    }
    form input, button{
        padding: 5px;
    }
    table{
        width: 100%;
        margin-bottom: 20px;
    border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 10px;
        text-align: left;
    }
</style>

  <form action="/orden" method="post">

     {{ csrf_field() }}

     
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="form-group">
        <label for="orden_num" name="orden_num" id="orden_num" >#Orden:  {{$orden_num}}</label>
        <div hidden="true">
           <input hidden="true" type="text" class="form-control" id="orden_num"  name="orden_num" value="{{$orden_num}}">       
        </div>
       
      </div>  
      <div>
         <label>Tipo de Visita</label>
        </br>
        <label  class="checkbox-inline">
        <input name="tipo_visita" type="checkbox" value="instalacion">Instalación
        </label>
        <label class="checkbox-inline">
          <input name="tipo_visita" type="checkbox" value="mantenimiento">Mantenimiento
        </label>
        <label class="checkbox-inline">
          <input name="tipo_visita" type="checkbox" value="mejora">Mejora equipo
        </label>
         <label class="checkbox-inline">
          <input name="tipo_visita" type="checkbox" value="emergencia">Emergencia
        </label>        
      </div>      
       
      </br>
     
      <div class="form-group">
        <label for="descripcion_servicio">Descripción del trabajo</label>
        <input type="text" class="form-control" id="descripcion_servicio"  name="descripcion_servicio">
      </div>
      <div class="form-group">
        <label for="detalle_servicio">Detalle del Trabajo realizado</label>
        <textarea class="form-control rounded-0" name="detalle_servicio" id="detalle_servicio" rows="3"></textarea>
      </div>
        
      
      <div class="form-group">
        <label for="insumos">Insumos</label>  
        <select  class="selectpicker" data-live-search="true" name="nombre" id="nombre" >
            @foreach($productos as $prod)
                  <option value="{{$prod->nombreP}}" data-precio="{{$prod->precioVenta}}" >{{$prod->nombreP}}  </option>
            @endforeach 
        </select>
        <input type="button" class="add-row" value="Agregar"> 
        <button type="button" class="delete-row">Eliminar fila</button>    

      </div>

    <table id="insumos_table">
        <thead>
            <tr>
                <th>Seleción</th>
                <th>Nombre</th>
                <th>Precio Venta</th>               
            </tr>
        </thead>
        
        <tbody>
            <tr>
               <td></td>
               <td></td>
               <td hidden="">0</td>
            </tr>
        </tbody>

<tfoot>
        <tr>
          <th></th>
          <th></th>
            <th id="total_">Total</th>
            
        </tr>
    </tfoot>
    </table>
    


  
    
    <div class="form-group">
         <label for="lb_fecha">Fecha</label>      
      <input type="text" id="date" name="date"> </br> </br>
      <label for="l_finca">Finca</label>
      {!! Form::select('finca',$fincas,null,['id'=>'finca'])!!}
      <label for="l_equipo">Equipo</label>
      {!! Form::select('equipo',['placeholder'=>'Selecciona '],null,['id'=>'equipo'])!!}
      </br>
    </div>  
 <div class="form-group">
        <label for="plaza_credito">Plazo de Credito</label>
        <input type="number" class="form-control" id="plaza_credito" placeholder="semanas" name="plaza_credito">

        <label for="costo_servicio">Costo Servicio</label>
        <input type="text" class="form-control" id="costo_servicio"  name="costo_servicio">
      
      
        <label for="costo_kilometraje">Costo Kilometraje</label>
        <input type="text" class="form-control" id="costo_kilometraje"  name="costo_kilometraje">

        <label for="total_orden">Total Servicio</label>
        <input type="text" class="form-control" id="total_orden"  name="total_orden">
    
  </div>
    <div>
   
      <label for="responsable_finca">Responsable</label>
      <input type="text" class="form-control" id="responsable_finca"  name="responsable_finca"> 

      <label for="realizado">Realizado por</label>
      <select name="realizado" id="realizado" >
            @foreach($users as $user)
                  <option value="{{$user->id}}"  >{{$user->name}}  </option>
            @endforeach 
        </select>
    </div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
         Crear Orden 
        </button>
      </div>
    </div>
   
  </form>
   

@endsection