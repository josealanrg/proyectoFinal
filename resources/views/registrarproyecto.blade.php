@extends ('homeadmin')

@section('registrarproyecto')

 <div class="container">
        {!! Form::open(array('url' => 'registrarproyecto')) !!}
 
           
 
            <h2>Registrar Nuevo Proyecto</h2>
 
            {!! Form::label('nombre', 'Nombre del Proyecto') !!}
            {!! Form::text('nombre') !!}

       		<h6>Fecha de Creacion del Proyecto</h6>   {!!Form::input('date', 'fechaCreacion') !!} <br>

          <h6>Fecha de Entrega del Proyecto</h6>   {!!Form::input('date', 'fechaEntrega') !!} <br> <br>
            
 
            {!! Form::label('descripcion', 'Descripcion del Proyecto') !!}
            {!! Form::text('descripcion') !!} <br>
 
            
            
            {!! Form::submit('Registrar') !!}
    
        {!! Form::close() !!}
    </div>

@stop