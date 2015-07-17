@extends('layouts.principalAdm')
<?php $message=Session::get('message')?>
@if(Session:: has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   {{Session::get('message')}}
</div>
@endif
@section('content')
  

    <table class="table" id="tabla">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Fecha Entrega</th>
      </thead>
      @foreach($proyectos as $proyecto)
      <tbody>
        <td>{{$proyecto->id}}</td>
        <td>{{$proyecto->name}}</td>
        <td>{{$proyecto->description}}</td>
        <td>{{$proyecto->dateE}}</td>
        <td>{!!link_to_route('proyecto.edit', $title = 'Editar', $parameters = $proyecto->id, $attributes =['class'=>'btn-primary'])!!}
        </td>
      </tbody>
      @endforeach
    </table>
    
    <div class="btn-group" align="center">
          <a href="{{URL::to('proyecto/create')}}" class="btn btn-info">
            <span class="glyphicon glyphicon-plus"><br>Proyecto</span></a>
      </div>
@stop