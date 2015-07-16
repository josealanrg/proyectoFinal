@extends ('homeadmin')

@section('editartarea')

 <div class="container">
       {!! Form::model($tareas, ['method' => 'PATCH', 'action' => ['HomeController@updateTarea']]) !!}
 
           
 
        <h2>Actualizar Tarea</h2>
 
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

 
            
            
            {!! Form::submit('Actualizar Tarea') !!}
    
        {!! Form::close() !!}
    </div>

@stop