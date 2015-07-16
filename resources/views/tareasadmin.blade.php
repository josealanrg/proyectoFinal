@extends('homeadmin')

@section('muestratareas')

@foreach ($tareas as $tarea)
<center>

@if ($tarea->estatus == 'Pendiente')
  <div class="panel panel-default">
@elseif($tarea->estatus == 'En Progreso')
  <div class="panel panel-info">
@else
  <div class="panel panel-success">


@endif

  <div class="panel-heading" >
    <h3 class="panel-title">Tarea : {{ $tarea->descripcion}}</h3>
  </div>
  <div class="panel-body">
    <b>Proyecto :</b> {{ $tarea->nombre}}<br>
    <b>Fecha de Entrega :</b> {{ $tarea->fechaEntrega}} <br>
    <b>Colaborador  :</b> {{ $tarea->nombre_usuario}} <br>
    <b> Estado : </b> {{$tarea->estatus}} <br>

     <a href="{{ url ('editartarea',$tarea->id_tarea) }}" class="btn btn-primary">
            Editar
          </a>

  </div>
</div>

            </center>
         
                <BR>


                
<br>

</center> <br>
              @endforeach


@stop