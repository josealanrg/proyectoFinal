@extends ('homeadmin')

@section('registrartarea')

 <div class="container">
        {!! Form::open(array('url' => 'registrartarea')) !!}
 
           <table id="tabla1">
            <tr>
            <h2>Registrar Nueva Tarea</h2>
            <hr width="80%" align="Center" id="linea">
            </tr>
            <tr>
            <td>{!! Form::label('descripcion', 'Descripcion de la Tarea') !!} </td>
            <td>{!! Form::text('descripcion') !!}</td>
            </tr>
            <tr>
       		 <td><h6>Fecha de Entrega de la Tarea</h6></td>
            <td>{!!Form::input('date', 'fechaEntrega') !!}</td>  
            </tr>

            <tr>
 <td>
                 <select name="id_proyecto">
            @foreach($proyectos as $proyecto)

      <option value="{{$proyecto->id_proyecto}}" > {{$proyecto->nombre}}</option>

            @endforeach
</td>
</tr>
<tr>
<td>
                </select> <br>

                <select name="id_usuario">
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->id_usuario}}" > {{$usuario->usuario}}</option>
            @endforeach
                </select> <br>
</td>
</tr>
<tr>
<td>
                <select name="id_estatus">
            @foreach($estatus as $estatu)
            	<option value="{{$estatu->id_estatus}}" > {{$estatu->estatus}}</option>
            @endforeach
            	</select> <br>
</td>
        </tr>
            
            <tr>
            <td>
             {!! Form::submit('Registrar') !!}
                </td>

        {!! Form::close() !!}
    </div>
    </tr>
</table>
@stop