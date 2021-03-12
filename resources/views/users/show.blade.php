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
                    <th>NUMERO DE IDENTIFICACION</th>
                    <td>{{$user->num_ced}}</td>
                </tr>
                <tr>
                    <th>PRIMER NOMBRE</th>
                    <td>{{$user->Primer_Nombre}}</td>
                </tr>
                <tr>
                    <th>SEGUNDO NOMBRE</th>
                    <td>{{$user->Segundo_Nombre}}</td>

                </tr>
                <tr>
                    <th>APELLIDOS</th>

                    <td>{{$user->Apellidos}}</td>

                </tr>
                <tr>
                    <th>DIRECCION</th>
                    <td>{{$user->Direccion}}</td>

                </tr>
                <tr>
                    <th>TELEFONO</th>
                    <td>{{$user->Telefono}}</td>

                </tr>
                    <tr>
                    <th>CIUDAD</th>
                    <td>{{$user->Ciudad}}</td>



            </table>
            <a href="{{route('User.index')}}" class="btn btn-default">Volver</a>
            <a href="{{route('User.edit',$user->id)}}" class="btn btn-warning">Editar</a>

        </div>
    </div>
</div>


</body>
</html>



