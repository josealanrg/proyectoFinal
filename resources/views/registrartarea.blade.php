@extends ('homeadmin')

@section('registrartarea')

 <div class="container">
        {!! Form::open(array('url' => 'registrartarea')) !!}
 
           
 
            <h2>Registrar Nueva Tarea</h2>
 
            {!! Form::label('descripcion', 'Descripcion de la Tarea') !!}
            {!! Form::text('descripcion') !!}

       		<h6>Fecha de Entrega de la Tarea</h6>   {!!Form::input('date', 'fechaEntrega') !!} <br> <br>


            
 
                 <select name="id_proyecto">
            @foreach($proyectos as $proyecto)

      <option value="{{$proyecto->id_proyecto}}" > {{$proyecto->nombre}}</option>

            @endforeach
                </select> <br>

                <select name="id_usuario">
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->id_usuario}}" > {{$usuario->usuario}}</option>
            @endforeach
                </select> <br>

                <select name="id_estatus">
            @foreach($estatus as $estatu)
            	<option value="{{$estatu->id_estatus}}" > {{$estatu->estatus}}</option>
            @endforeach
            	</select> <br>

 
            
            
            {!! Form::submit('Registrar') !!}
    
        {!! Form::close() !!}
    </div>

@stop