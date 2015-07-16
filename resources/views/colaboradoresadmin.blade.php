@extends('homeadmin')

@section('muestracolaboradores')
			<h2> Lista de Colaboradores y N° de Tareas Asignadas</h2>
<table border="2">
@foreach($colaboradores as $colaborador)
	<tr>

		<td> <h3>{{$colaborador->usuario}} </h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
		<td> <h4> Tareas Asignadas : {{$ntareas}} </h4></td>

	</tr>
@endforeach
</table>

@stop