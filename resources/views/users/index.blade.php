<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('User.create')}}" class="btn btn-primary mt-5 mb-3">CREAR NUEVO USUARIO</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NUMERO DE IDENTIFICACION</th>
                        <th>PRIMER NOMBRE</th>
                        <th>SEGUNDO NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>DIRECCION</th>
                        <th>TELEFONO</th>
                        <th>CIUDAD</th>
                        <th>FECHA DE CREACION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->num_ced}}</td>
                            <td>{{$user->Primer_Nombre}}</td>
                            <td>{{$user->Segundo_Nombre}}</td>
                            <td>{{$user->Apellidos}}</td>
                            <td>{{$user->Direccion}}</td>
                            <td>{{$user->Telefono}}</td>
                            <td>{{$user->Ciudad}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <form action="{{route('User.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('User.show',$user->id)}}"class="btn btn-info">Detalles</a>
                                    <a href="{{route('User.edit',$user->id)}}"class="btn btn-warning">Editar</a>
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
