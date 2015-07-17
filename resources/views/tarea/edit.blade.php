@extends('layouts.principalAdm')
@section('content')
@include('alerts.request')
     {!!Form::model($tarea,['route'=>['tarea.update',$tarea->id],'method'=>'PUT'])!!}
     	@include('tarea.forms.tar')
     	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
     {!!Form::close()!!}
	{!!Form::open(['route'=>['tarea.destroy',$tarea->id],'method'=>'DELETE'])!!}
    	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@stop