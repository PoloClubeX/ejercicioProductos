<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '' && (isset($_POST['categoria'])) && ($_POST['categoria'] != ''))) {

    require_once "../models/modelo.php";
    $nuevo = new Producto();
    $asd = $nuevo->updateProducto($datosUpdate['id'],$_POST['nombre'], $_POST['precio'], $_POST['categoria']);
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="text-center">
            <h1>Modificación de productos</h1>
            <hr />

        </header>
        <div class="row">
            <div class="col-lg-6">

                <form action="#" method="post" class="col-lg-5">
                    <h3>Actualizar Producto</h3>
                    Nombre: <input value="<?php echo $datosUpdate['nombre']; ?>" type="text" name="nombre"
                        class="form-control" />
                    Precio: <input value="<?php echo $datosUpdate['precio']; ?>" type="text" name="precio"
                        class="form-control" />
                    Categoria: <input value="<?php echo $datosUpdate['idCategoria']; ?>" type="text" name="categoria"
                        class="form-control" />
                    <br />
                    <input type="submit" value="Actualizar" class="btn btn-success" />
                </form>
            </div>
            <div class="col-lg-6 text-center">
                <hr />
                <h3>Listado de Productos</h3>
                <a href="../controllers/controlador.php"><i class="fa fa-align-justify"></i> Ver el listado de
                    Productos</a>
                <hr />
            </div>
        </div>
    </div>
</body>

</html>