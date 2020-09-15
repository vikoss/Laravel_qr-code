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
        <div class="content">
    
            <div class="title m-b-md">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Expediente</th>
                            <th scope="col">Clave y Valor Catastral</th>
                            <th scope="col">Predial</th>
                            <th scope="col">Aportacion Mejoras</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($taxes as $tax)
                            <tr>
                                <th> {{ $tax->EXP }} </th>
                                <td> {{ $tax->CLAVE_Y_VALOR_CATASTRAL ?? 'n/a' }}
                                    @if($tax->CLAVE_Y_VALOR_CATASTRAL)
                                    <a href="{{ route('pdf', [ 'uuid' => $tax->uuid, 'type' => 'CV' ]) }}">QR</a>
                                    @endif
                                </td>
                                <td> {{ $tax->NO_ADEUDO_PREDIAL ?? 'n/a' }}
                                    @if($tax->NO_ADEUDO_PREDIAL)
                                        <a href="{{ route('pdf', [ 'uuid' => $tax->uuid, 'type' => 'PP' ]) }}">QR</a>
                                    @endif
                                </td>
                                <td> {{ $tax->APORTACIONES_MEJORAS ?? 'n/a' }}
                                    @if($tax->APORTACIONES_MEJORAS)
                                        <a href="{{ route('pdf', [ 'uuid' => $tax->uuid, 'type' => 'AM' ]) }}">QR</a>
                                    @endif
                                </td>
                                <td> {{ $tax->NOMBRE }} </td>
                                <td><a onClick="return confirm('Estas seguro ?')" href="{{ route('delete.tax', $tax) }}">Eliminar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $taxes->render() !!}
            </div>
        </div>
    </body>
</html>
