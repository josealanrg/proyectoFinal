@extends ('homeadmin')

@section('registrarproyecto')

 <div class="container">
        {!! Form::open(array('url' => 'registrarproyecto')) !!}
 
 
 <table id="tabla">
    <tr>
            <h2>Registrar Nuevo Proyecto</h2>
            <hr width="80%" align="center" id"linea2">
    </tr>
    <tr>
         <td>
            {!! Form::label('nombre', 'Nombre del Proyecto') !!}
        </td>
        <td>
            {!! Form::text('nombre',null,null,['size' =>'100%']) !!}
        </td>
    </tr>
    <tr>
        <td>
            <h6>Fecha de Creacion del Proyecto</h6>   
         </td>
         <td>
            {!!Form::input('date', 'fechaCreacion') !!} 
          </td>
     </tr>  
     <tr>
        <td>
                  <h6>Fecha de Entrega del Proyecto</h6>   
         </td>       
         <td>
                  {!!Form::input('date', 'fechaEntrega') !!} 
        </td>
       
    </tr>
        <tr>
            <td>
               {!! Form::label('descripcion', 'Descripcion del Proyecto') !!} </td>
               <td>
            {!! Form::text('descripcion') !!}
           </td>
         </tr>
    <tr>
        <td>
        Jefe del Proyecto
        </td>
        <td>
                <select name="id_usuario">
            @foreach($usuarios as $usuario)
                <option value="{{$usuario->id_usuario}}" > {{$usuario->usuario}}</option>
            @endforeach
                </select>

        </td>
    </tr>
          
    <td>
            <center>
            <br> {!! Form::submit('Registrar') !!}
    
         {!! Form::close() !!}
    </div>
    </center>
    </td>

</table>
@stop