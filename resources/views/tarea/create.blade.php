@extends('layouts.principalAdm')
@section('content')


{!!Form::open(['route'=>'tarea.store','method'=>'POST'])!!}
  @include('tarea.forms.tar2')
  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}


@stop