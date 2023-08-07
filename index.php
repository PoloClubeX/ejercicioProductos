<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '' && (isset($_POST['categoria'])) && ($_POST['categoria'] != ''))) {

    include "models/modelo.php";
    $nuevo = new Producto();
    $asd = $nuevo->setProducto($_POST['nombre'], $_POST['precio'], $_POST['categoria']);
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Propuctos</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="text-center">
            <h1>Gestion de productos</h1>
            <hr />

        </header>
        <div class="row">
            <div class="col-lg-6">

                <form action="#" method="post" class="col-lg-5">
                    <h3>Nuevo servicio</h3>
                    Nombre: <input type="text" name="nombre" class="form-control" />
                    Precio: <input type="text" name="precio" class="form-control" />
                    Categoria: <input type="text" name="categoria" class="form-control" />
                    <br />
                    <input type="submit" value="Crear" class="btn btn-success" />
                </form>
            </div>
            <div class="col-lg-6 text-center">
                <hr />
                <h3>Listado de servicios</h3>
                <a href="controllers/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de
                    servicios</a>
                <hr />
            </div>
        </div>
    </div>
</body>

</html>