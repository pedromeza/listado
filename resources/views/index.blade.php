@extends('layouts.app')

@section('content')
@include('modaleditar')
@include('modalcreate')
<div class="container">
    <div class="form-row">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong>usuarios</strong></div>

                <div class="panel-body">
                  <button type="button" class="btn btn-primary  agregar" data-toggle='modal' data-target='#agregaruser' style="color:#fff;">	<i class="fa fa-plus"> 	Agregar</i></button>


                  <table class="table table-responsive">
                    <thead>
                      <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Apellido Paterno</td>
                        <td>Apellido Materno</td>
                        <td>RFC</td>
                        <td>Fecha de Nacimiento</td>
                        <td>Accion</td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($usuarios as $user)
                        <tr>
                       <td>{{$user->id}}</td>
                       <td>{{$user->name}}</td>
                       <td>{{$user->apaterno}}</td>
                       <td>{{$user->amaterno}}</td>
                       <td>{{$user->rfc}}</td>
                       <td>{{$user->fechanacimiento}}</td>
                       <td style="color:red;">
                         <button type="button" data-toggle='modal' id="edituser" data-target='#edituser'  title="Editar"
												 data-id='{{ $user->id }}' class="btn ">  <i class="fa fa-edit">Editar</i></button><br>
                         <form class="" id="frmEliminarRegistro" action="{{ url('usuario@delete,$id') }}" method="DELETE">
                           <input name="_token" type="hidden" value="{{ csrf_token() }}">
                           <button type="button" onclick="eliminarRegistro({{$user->id}},1);" name="button">Eliminar</button>

                         </form>
                       </td>
                       </tr>
                      @endforeach
                    </tbody>

                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
