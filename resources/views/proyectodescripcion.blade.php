@extends('homeadmin')

@section('proyectodescripcion')

@foreach ($proyectos as $proyecto)
<center>
<div class="panel panel-success">
  <div class="panel-heading" >
    <h3 class="panel-title">Proyecto : {{ $proyecto->nombre}}</h3>
  </div>
  <div class="panel-body">
    <b>Descripcion :</b> {{ $proyecto->descripcion}}<br>
    <b>Fecha de Entrega :</b> {{ $proyecto->fechaEntrega}}
  </div>
</div>

            </center>
         
                <BR>


                
<br>

</center> <br>
              @endforeach


@stop