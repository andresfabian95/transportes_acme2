
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
            <form action="{{route('User.store')}}" method="post">
@csrf
<div class=" form-goup">
    <label for="num_ced">NUMERO DE IDENTIFICACION</label>
    <input type="text" name="num_ced" id="num_ced" class="form-control">
</div>


<div class="form-group">
    <label for="Primer_Nombre">PRIMER NOMBRE</label>
    <input type="text" name="Primer_Nombre"id="Primer_Nombre" class="form-control">


</div>
<div class="form-group">
    <label for="Segundo_Nombre">SEGUNDO NOMBRE</label>
    <input type="text" name="Segundo_Nombre"id="Segundo_Nombre" class="form-control">


</div>
<div class="form-group">
    <label for="Apellidos">APELLIDOS</label>
    <input type="text" name="Apellidos"id="Apellidos" class="form-control">


</div>
<div class="form-group">
    <label for="Direccion">DIRECCION</label>
    <input type="text" name="Direccion"id="Direccion" class="form-control">


</div>
<div class="form-group">
    <label for="Telefono">TELEFONO</label>
    <input type="text" name="Telefono"id="Telefono" class="form-control">


</div>

<div class="form-group">
    <label for="Ciudad">CIUDAD</label>
    <input type="text"NAME="Ciudad"id="Ciudad" class="form-control">


</div>
<hr>
<button class="btn btn-primary" type="submit">GUARDAR USUARIO</button>
<a href="{{ route('User.index')}}" >CANCELAR</a>

</form>
</div>

</div>
</div>
</body>
</html>

