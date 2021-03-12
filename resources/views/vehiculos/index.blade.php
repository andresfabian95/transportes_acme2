<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Document</title>
    <body background="https://fondosmil.com/fondo/21960.jpg"> </body>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('Vehiculo.create')}}" class="btn btn-primary mt-5 mb-3">CREAR NUEVO USUARIO</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PLACA</th>
                        <th>COLOR</th>
                        <th>MARCA</th>
                        <th>TIPO DE VEHICULO</th>
                        <th>CONDUCTOR</th>
                        <th>PROPIETARIO</th>
                        <th>FECHA DE CREACION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->Placa}}</td>
                            <td>{{$user->color}}</td>
                            <td>{{$user->marca}}</td>
                            <td>{{$user->tipo_vehiculo}}</td>
                            <td>{{$user->conductor}}</td>
                            <td>{{$user->propietario}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <form action="{{route('Vehiculo.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('Vehiculo.show',$user->id)}}"class="btn btn-info">Detalles</a>
                                    <a href="{{route('Vehiculo.edit',$user->id)}}"class="btn btn-warning">Editar</a>
                                    <button type="submit"class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

