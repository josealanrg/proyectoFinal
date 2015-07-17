<div>
    {!!Form::label('Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del Usuario'])!!}
  </div>
   <div>
    {!!Form::label('Email:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Email'])!!}
  </div>
   <div>
    {!!Form::label('Password:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la Contraseña'])!!}
  </div>

  <div>
    
         <select name="id_type">
            @foreach($types as $type)
                <option value="{{$type->id}}"> {{$type->type}}</option>
            @endforeach
        </select>
  </div>