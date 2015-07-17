@extends('homeadmin')

@section('muestracolaboradores')
			<h2> Lista de Colaboradores</h2>
			<hr width="100%" align="Center">
<table border="2" width="75%" >
<tr>
		 <td><b><center><h4>Colaborador</h4></b></center></td>
		<td><b><center><h4>Tareas Asignadas</h4></b> </center></td> 
	</tr>
@foreach($colaboradores as $colaborador)
	
	<tr>
		<td> <center><h5>{{$colaborador->usuario}} </h5></center></td> 
		<td> <center><h5>{{$ntareas}} </h5></center></td>

	</tr>
	@endforeach
</table>

@stop