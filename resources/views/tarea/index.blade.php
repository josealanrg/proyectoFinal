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
        <th>Descripcion</th>
        <th>Fecha Entrega</th>
        <th>Corresponde al Proyecto</th>
        <th>Asignada a</th>
        <th>Estado</th>

      </thead>
      @foreach($tareas as $tarea)
      <tbody>
        <td>{{$tarea->id}}</td>
        <td>{{$tarea->description}}</td>
        <td>{{$tarea->dateE}}</td>
        <td>{{$tarea->name}}</td>
        <td>{{$tarea->email}}</td>
        <td>{{$tarea->status}}</td>
        <td>{!!link_to_route('tarea.edit', $title = 'Editar', $parameters = $tarea->id, $attributes =['class'=>'btn-primary'])!!}
        </td>
      </tbody>
      @endforeach
    </table>
    
    <div class="btn-group">
          <a href="{{URL::to('tarea/create')}}" class="btn btn-info">
            <span class="glyphicon glyphicon-plus"><br>Tarea</span></a>
      </div>
@stop