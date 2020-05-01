<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Certificado Qr</title>
        <style>
            html {
                min-height: 100%;
                position: relative;
            }
            body {
                margin: 0;
                margin-bottom: 40px;
            }
            footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /*height: 40px;*/
            }
            .grid{
                display: flex;
                align-items: flex-end;
            }
        </style>
    </head>
    <body>
        @php
            $codeQr = QrCode::format('png')->size(150)->generate("Hola este codigo es el que se genera")
        @endphp
        <footer>
        <span class="grid">
                <img src="data:img/png;base64, {!! base64_encode($codeQr) !!}" alt="Codigo Qr del certificado">
        </span>
                
            </span>
    </body>
</html>
