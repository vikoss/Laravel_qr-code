@php
    $totalAdditives = 0;
    $totalAmount    = 0;
    $totalLiters    = 0;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    <style>
        .text-center {
            text-align: center;
        }
        .text-left {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .full-width {
            width: 100%;
        }
        .border-1 {
            border: 1px solid black;
        }
        .border-bottom {
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <table style="width:100%">
        <tr>
            <th>
                <h1 class="text-left">H. Ayuntamiento de Nicolas Romero, Mex.</h1>
                <p class="text-left">Jefatura de Recursos Materiales</p>
            </th>
            <th>
                <img src="" alt="Logo municipio de Nicolas Romero">
            </th>
        </tr>
    </table>
    <h1 class="text-center">Reporte de Suministro de conbustible</h1>
    <h2>No. de Factura {{ $invoice }}</h2>
    <p>Periodo del:
        <strong>{{ $startDate }}</strong>
        al
        <strong>{{ $endDate }}</strong>
    </p>
    
    
    <section>
        <table class="full-width">
        @foreach($dependencies as $key => $dependency)
            <tr>
                <th colspan="3">
                    Dep. General: {{ $dependency['name'] }}
                </th>
                <th colspan="3">
                    Dep. Auxiliar: {{ $dependency['section'] }}
                </th>
            </tr>
            @foreach($dependency['vehicle'] as $key => $vehicle)
                @foreach($vehicle['refills'] as $key => $refill)
                <tr>
                    <th>Vehiculo</th>
                    <th>Folio</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                    <th>{{ $refill['type'] }}</th>
                    <th>Aditivo</th>
                </tr>
                <tr class="text-center">
                    <td>{{ $vehicle['vehicle'] }}</td>
                    <td>{{ $refill['ticket_id'] }}</td>
                    <td>{{ $refill['created_at'] }}</td>
                    <td>$ {{ $refill['ticket_amount'] }}</td>
                    <td>{{ $refill['liters'] }} litros</td>
                    <td>{{ $refill['additives'] }}</td>
                </tr>
                @php
                    $totalAdditives += $refill['additives'];
                    $totalAmount    += $refill['ticket_amount'];
                    $totalLiters    += $refill['liters'];
                @endphp
                <tr>
                    <td colspan="3">Total:</td>
                    <td>{{ $totalAmount }}</td>
                    <td>{{ $totalLiters }}</td>
                    <td>{{ $totalAdditives }}</td>
                </tr>
                @endforeach
            @endforeach
        @endforeach
        </table>
    </section>
    
</body>
</html>