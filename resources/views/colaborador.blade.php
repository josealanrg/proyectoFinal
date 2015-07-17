@extends('layouts.principalAdm')

@section('content')
			<h2> Lista de Colaboradores</h2>
			<hr width="100%" align="Center">
<table border="2" width="75%" >
<tr>
		 <td><b><center><h4>Colaborador</h4></b></center></td>
		
	</tr>
@foreach($users as $user)
	
	<tr>
		<td> <center><h5>{{$user->name}} </h5></center></td> 
		<td> <center><h5> </h5></center></td>

	</tr>
	@endforeach
</table>

@stop