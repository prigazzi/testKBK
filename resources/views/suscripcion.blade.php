<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TestKBK</title>
</head>
<body>
<h1>Formulario</h1>
{{ Form::open(['url' => 'suscripcion/guardasuscripcion']) }}
    {{ Form::label('email', 'E-Mail') }}
    {{ Form::email('email') }}
    <select name="state">
    @foreach($states as $state)
        <option value="{{$state['id']}}">
            {{$state['name']}}
        </option>
    @endforeach
    </select>
    {{Form::submit('Click Me!')}}
{{ Form::close() }}
</body>
</html>