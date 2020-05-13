<!DOCTYPE html>
<html>
<head>
    <title>Subir excel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Selecciona el excel
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <br>
                @if ( session()->get( 'uploaded' ) )
                    <div class="alert alert-success" role="alert">El archivo se ha importado correctamente !</div>
                @endif
                <button class="btn btn-primary">Subir excel</button>
                <!--a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a-->
            </form>
        </div>
    </div>
</div>
   
</body>
</html>