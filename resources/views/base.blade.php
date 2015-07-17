<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
			{!! HTML::script('js/jquery-2.1.4.min.js') !!}	
			{!! HTML::style('/css/estilos.css') !!}	
			{!! HTML::style('/bootstrap/css/bootstrap.css') !!}	
			{!! HTML::style('/bootstrap/css/bootstrap.min.css') !!}	
			{!! HTML::style('/bootstrap/fonts/glyphicons-halflings-regular.woff') !!}	




    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
    
        

  <figure>
<img src="banner.png">
</figure>

@yield ('welcome')

@yield('homeadmin')

@yield ('login')
 <footer>
        <div class="well well-sm">
  DR Ing. Web
		</div>
    </footer>
</body>
</html>
