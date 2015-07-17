@extends('layouts.principalAdm')
<?php $message=Session::get('message')?>
@if(Session:: has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   {{Session::get('message')}}
</div>
@endif
@section('content')
    <table class="table">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Opcion</th>
      </thead>
      @foreach($users as $user)
      <tbody>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes =['class'=>'btn-primary'])!!}
        </td>
      </tbody>
      @endforeach
    </table>
    {!!$users->render()!!}
    <div class="btn-group" align="center">
          <a href="{{URL::to('usuario/create')}}" class="btn btn-info">
            <span class="glyphicon glyphicon-plus"><br>Usuario</span></a>
      </div>
@stop