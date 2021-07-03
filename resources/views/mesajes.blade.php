<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><strong>Enviado por</strong> {{ $data['correo'] }}</h1>
    <h1><strong>Nombre: </strong>{{ $data['nombre'] }} </h1>

    <h1><strong> Apellido: </strong>{{ $data['apellido'] }}</h1>

    <h2><strong>Tema: </strong>{{ $data['tema'] }}</h2>

    <h3><strong>Mensaje:</strong>{{ $data['mensaje'] }}</h3>


</body>

</html>
