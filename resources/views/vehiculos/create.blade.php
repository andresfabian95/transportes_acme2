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
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-5">
            <form action="{{route('Vehiculo.store')}}" method="post">
                @csrf
                <div class=" form-goup">
                    <label for="Placa">PLACA</label>
                    <input type="text" name="Placa" id="Placa" class="form-control">
                </div>


                <div class="form-group">
                    <label for="color">COLOR</label>
                    <input type="text" name="color"id="color" class="form-control">


                </div>

                <div class="form-group">
                    <label for="marca">MARCA</label>
                    <input type="text"name="marca"id="marca" class="form-control">


                </div>
                <div class="form-group">
                    <label for="tipo_vehiculo">TIPO DE VEHICULO</label>
                    <input type="text"name="tipo_vehiculo"id="tipo_vehiculo" class="form-control">


                </div>
                <div class="form-group">
                    <label for="conductor">CONDUCTOR</label>
                    <input type="text"name="conductor"id="conductor" class="form-control">


                </div>
                <div class="form-group">
                    <label for="propietarioL">PROPIETARIO</label>
                    <input type="text"name="propietario"id="propietario" class="form-control">


                </div>
                <hr>
                <button class="btn btn-primary" type="submit">GUARDAR USUARIO</button>
                <a href="{{ route('Vehiculo.index')}}" >CANCELAR</a>

            </form>
        </div>

    </div>
</div>
</body>
</html>


