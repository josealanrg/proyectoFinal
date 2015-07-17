<div>
    {!!Form::label('Descripcion:')!!}
    {!!Form::text('description',null,['class'=>'form-control','placeholder'=>'Ingresa la Descripcion de la tarea'])!!}
  </div>
   
   <div>
    
   {!!Form::input('date', 'dateE') !!} 
  </div>

<div>
        <select name="id_proyecto" id="selectProyecto">
            @foreach($proyectos as $proyecto)
                <option value="{{$proyecto->id}}" > {{$proyecto->name}}</option>
            @endforeach
        </select>

</div>
<div>
        <select name="id_usuario" id="selectUsuario">
            @foreach($users as $user)
                <option value="{{$user->id}}" > {{$user->name}}</option>
            @endforeach
        </select>

</div>
<div>

        <select name="id_status" id="selectEstatus">
            @foreach($status as $statu)
                <option value="{{$statu->id}}" > {{$statu->status}}</option>
            @endforeach
        </select>
</div>

   <script type="text/javascript">
    $("#selectProyecto").val(<?php echo ($tarea->id_proyecto);?>);
    $("#selectUsuario").val(<?php echo ($tarea->id_usuario);?>);
    $("#selectEstatus").val(<?php echo ($tarea->id_estatus);?>);

    </script>