<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <title>Certificacion QR</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                
                <div class="col-sm">
                    <img src="{{ asset('images/nr_logo.jpg') }}" alt="Logo Nicolas Romero" style="width: 100%; height: auto;">
                </div>

                <div class="col-sm">
                    <h1 class="h2">Municipio Nicolas Romero, Mexico</h1>
                    <h2 class="h3">Certificaciones Vigentes</h2>
                    
                    <h4>
                        Nombre:
                        <small class="text-muted">{{ $tax->NOMBRE }}</small>
                    </h4>
                    <h4>
                        Certificado:
                        <small class="text-muted">{{ $tax->CERTIFICACION }}</small>
                    </h4> 
                    <h4>
                        Folio:
                        <small class="text-muted">{{ $tax->FOLIO }}</small>
                    </h4>
                    <h4>
                        Vigencia(Bimestre):
                        <small class="text-muted">{{ $tax->VIGENCIA }}</small>
                    </h4>

                </div>

            </div>
        </div>
    </body>
</html>
