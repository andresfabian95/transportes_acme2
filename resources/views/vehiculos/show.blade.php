<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container-">
    <div class="row-">
        <div class="col-md-6 offset-md-3">
            <table class="table">
                <tr>
                    <th>PLACA</th>
                    <td>{{$user->Placa}}</td>
                </tr>
                <tr>
                    <th>COLOR</th>
                    <td>{{$user->color}}</td>
                </tr>
                <tr>
                    <th>MARCA</th>
                    <td>{{$user->marca}}</td>
                </tr>
                <tr>
                    <th>TIPO DE VEHICULO</th>
                    <td>{{$user->tipo_vehiculo}}</td>
                </tr>
                <tr>
                    <th>CONDUCTOR</th>
                    <td>{{$user->conductor}}</td>
                </tr>
                <tr>
                    <th>PROPIETARIO</th>
                    <td>{{$user->propietario}}</td>
                </tr>
            </table>
            <a href="{{route('Vehiculo.index')}}" class="btn btn-default">Volver</a>
            <a href="{{route('Vehiculo.edit',$user->id)}}" class="btn btn-warning">Editar</a>

        </div>
    </div>
</div>


</body>
</html>



