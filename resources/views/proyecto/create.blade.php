@extends('layouts.principalAdm')
@section('content')


{!!Form::open(['route'=>'proyecto.store','method'=>'POST'])!!}
  @include('proyecto.forms.pry')
  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@stop