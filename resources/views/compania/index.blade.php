@extends ('layouts.admin')
@section ('contenido')
 <a href="{{url('compania/create')}}"><i class="fa fa-folder"></i>Crear</a>
<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Cédula</td>
              <td>Nombre</td>
              <td>email</td>
              <td>Telefono</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($compania as $comp)
            <tr>
                <td>{{$comp->id}}</td>
                <td>{{$comp->num_identif}}</td>
                <td>{{$comp->name}}</td>
                <td>{{$comp->email}}</td>
                <td>{{$comp->tel}}</td>
                <td><a href="{{action('CompaniaController@edit',$comp->id)}}" class="btn btn-primary">Edit</a></td>
                <td>Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection