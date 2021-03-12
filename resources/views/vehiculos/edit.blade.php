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
            <form action="{{route('Vehiculo.update',$user->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tr>
                        <th>PLACA</th>
                        <td><input type="text" name="Placa" class="fore-control"value="{{$user->Placa}}"></td>
                    </tr>
                    <tr>
                        <th>COLOR</th>
                        <td><input type="text"name="color" class="fore-control" value="{{$user->color}}"></td>
                    </tr>
                    <tr>
                        <th>MARCA</th>
                        <td><input type="text" name="marca" class="fore-control" value="{{$user->marca}}"></td>
                    </tr>
                    <tr>
                        <th>TIPO DE VEHICULO</th>
                        <td><input type="text" name="tipo_vehiculo" class="fore-control" value="{{$user->tipo_vehiculo}}"></td>
                    </tr>
                    <tr>
                        <th>CONDUCTOR</th>
                        <td><input type="text" name="conductor" class="fore-control" value="{{$user->conductor}}"></td>
                    </tr>
                    <tr>
                        <th>PROPIETARIO</th>
                        <td><input type="text" name="propietario" class="fore-control" value="{{$user->propietario}}"></td>
                    </tr>

                </table>
                <a href="{{route('Vehiculo.index')}}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>

        </div>
    </div>
</div>


</body>
</html>


