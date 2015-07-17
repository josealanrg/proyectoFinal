@extends ('homeadmin')

@section('editartarea')
 
 <div class="container">
   <form method='put' action="/updatetarea/{{$tareas->id_tarea}}" enctype="multipart/form-data">

    
           
 
        <h2>Actualizar Tarea</h2>
            
            {!! Form::label('descripcion', 'Descripcion de la Tarea') !!}
            {!! Form::text('descripcion',$tareas[0]->descripcion) !!}

            <h6>Fecha de Entrega de la Tarea</h6>   {!!Form::input('date', $tareas[0]->fechaEntrega) !!} <br> <br>


            
 
                 <select name="id_proyecto" id="selectProyecto">
            @foreach($proyectos as $proyecto)

      <option value="{{$proyecto->id_proyecto}}" > {{$proyecto->nombre}}</option>

            @endforeach
                </select> <br>

                <select name="id_usuario"  id="selectUsuario">
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->id_usuario}}" > {{$usuario->usuario}}</option>
            @endforeach
                </select> <br>

                <select name="id_estatus" id="selectEstatus">
            @foreach($estatus as $estatu)
                <option value="{{$estatu->id_estatus}}" > {{$estatu->estatus}}</option>
            @endforeach
                </select> <br>

 
            
            
            {!! Form::submit('Actualizar Tarea') !!}
    
       </form>
    </div>
    <script type="text/javascript">
    $("#selectProyecto").val(<?php echo ($tareas[0]->id_proyecto);?>);
    $("#selectUsuario").val(<?php echo ($tareas[0]->id_usuario);?>);
    $("#selectEstatus").val(<?php echo ($tareas[0]->id_estatus);?>);

    </script>

@stop