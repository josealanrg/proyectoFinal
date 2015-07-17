@extends ('base')

@section('login')

       {!! Form::open(['url' => 'login/procesadatos']) !!}

            @if(Session::has('error_message'))
                {!! Session::get('error_message') !!}
            @endif

            <h2>Proporcione los Datos</h2>

            {!! Form::label('usuario', 'Nombre de Usuario') !!}
            {!! Form::text('usuario') !!}

            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password') !!}

          
            
            {!! Form::submit('Entrar', ['class' => 'btn btn-primary btn-block']) !!}
    
        {!! Form::close() !!}

  @stop