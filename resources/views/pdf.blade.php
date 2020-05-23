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
                margin: 0;
            }
            body {
                margin: 0;
                margin-bottom: 40px;
                font-family: "Times New Roman", serif;
                margin: 0mm 0mm 40mm 10mm;
            }
            div {
                position: absolute;
                bottom: 30px;
                width: 100%;
                /*height: 40px;*/
            }
            p {
                position: absolute;
                bottom: 0;
                width: 100%;
            }
            .grid{
                display: flex;
                justify-content: flex-end;
            }
        </style>
    </head>
    <body>
        <div>
            <img src="data:img/png;base64, {!! base64_encode($qrCode) !!}" alt="Codigo Qr del certificado">
        </div>
        <p>{{ $stringCode }}</p>
    </body>
</html>
