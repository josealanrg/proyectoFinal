@extends('layouts.principalAdm')
@section('content')
@include('alerts.request')
     {!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
     	@include('usuario.forms.usr')
     	{!!Form::submit('Actualiza',['class'=>'btn btn-primary'])!!}
     {!!Form::close()!!}
	{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
    	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@stop