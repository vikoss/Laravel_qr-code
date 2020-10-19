<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table style="width:100%">
        <tr>
          <th>Codigo QR</th>
          <th>Vehiculo</th>
        </tr>
        @foreach($vehicles as $key => $vehicle)
        <tr>
          <td><img src="data:img/png;base64,{{ $vehicle['qr'] }}" alt="Codigo QR del vehiculo"></td>
          <td>{{ $vehicle['vehicle'] }}</td>
        </tr>
        @endforeach
      </table> 
    
</body>
</html>