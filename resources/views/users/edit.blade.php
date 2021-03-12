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
            <form action="{{route('User.update',$user->id)}}" method="post">
                @csrf
                @method('PUT')

                <table class="table">
                    <tr>
                        <th>NUMERO DE IDENTIFICACION</th>
                        <td><input type="text" name="num_ced" class="fore-control"value="{{$user->num_ced}}"></td>
                    </tr>
                    <tr>
                        <th>PRIMER NOMBRE</th>
                        <td><input type="text"name="Primer_Nombre" class="fore-control" value="{{$user->Primer_Nombre}}"></td>
                    </tr>
                    <tr>
                        <th>SEGUNDO NOMBRE</th>
                        <td><input type="text"name="Segundo_Nombre" class="fore-control" value="{{$user->Segundo_Nombre}}"></td>
                    </tr>
                    <tr>
                        <th>APELLIDOS</th>
                        <td><input type="text"name="Apellidos" class="fore-control" value="{{$user->Apellidos}}"></td>
                    </tr>
                    <tr>
                        <th>DIRECCION</th>
                        <td><input type="text"name="Direccion" class="fore-control" value="{{$user->Direccion}}"></td>
                    </tr>
                    <tr>
                        <th>TELEFONO</th>
                        <td><input type="text"name="Telefono" class="fore-control" value="{{$user->Telefono}}"></td>
                    </tr>
                    <tr>
                        <th>CIUDAD</th>
                        <td><input type="text" name="Ciudad" class="fore-control" value="{{$user->Ciudad}}"></td>
                    </tr>
                </table>
                <a href="{{route('User.index')}}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>

        </div>
    </div>
</div>


</body>
</html>

