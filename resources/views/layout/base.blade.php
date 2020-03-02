<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    @stack('css')
</head>
<body>
    <button class="btn btn-primary">boton mio</button>
    <ul>
        <li>Home</li>
        <li>Contacto</li>
        <li>Productos</li>
        <li>Venta</li>
    </ul>
    <div class="main">

        @yield('contenido')
    </div>
    <div class="lateral">
        @yield('lateral')
    </div>
</body>
</html>
