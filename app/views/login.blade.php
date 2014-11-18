
 
<h2>
  Ingresar
 </h2>
 
@if (Session::has('mensaje_error'))
<span>{{ Session::get('mensaje_error') }}</span>
@endif
 
{{ Form::open(array('url' => 'login' )) }}
    
    {{ Form::label('email', 'Correo'); }}
    {{ Form::text('email'); }}
    {{ Form::label('password', 'Clave'); }} 
    {{ Form::password('password'); }}
    {{ Form::submit('Ingresar'); }}
 
{{ Form::close() }}