@extends('layouts.principalAdm')
@section('content')
@include('alerts.request')
     {!!Form::model($proyecto,['route'=>['proyecto.update',$proyecto->id],'method'=>'PUT'])!!}
     	@include('proyecto.forms.pry')
     	{!!Form::submit('Actualiza',['class'=>'btn btn-primary'])!!}
     {!!Form::close()!!}
	{!!Form::open(['route'=>['proyecto.destroy',$proyecto->id],'method'=>'DELETE'])!!}
    	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@stop