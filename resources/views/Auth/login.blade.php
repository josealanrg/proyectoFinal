@extends ('base')

@section('login')

<form method="POST" action="auth/login">
    {!! csrf_field() !!}

    <div>
        Usuario
        <input type="text" name="usuario" value="{{ old('usuario') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Recordarme
    </div>

    <div>
        <button type="submit">Entrar</button>
    </div>
</form>
@stop