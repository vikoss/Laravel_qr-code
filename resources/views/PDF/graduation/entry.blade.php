<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acceso</title>
        <style>
        </style>
    </head>
    <body>
        <h1>{{ $name }}</h1>
        <img src="data:img/png;base64, {!! base64_encode($qrCode) !!}" alt="Codigo Qr del certificado">
    </body>
</html>
