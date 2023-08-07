<!DOCTYPE html>
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
            <h1>Gestion de productos</h1>
            <hr />

        </header>
        <div class="col-lg-6 text-center">
            <hr />
            <h3>Listado de productos</h3>
            <table class="table">
                <tr>
                    <td><strong>Nombre del producto</strong></td>
                    <td><strong>Precio</strong></td>
                    <td><strong>Categoria</strong></td>
                </tr>
                <?php
                for ($i = 0; $i < count($datos); $i++) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $datos[$i]["nombre"]; ?>
                        </td>
                        <td>
                            <?php echo $datos[$i]["precio"]; ?>
                        </td>
                        <td>
                            <?php echo $datos[$i]["idCategoria"]; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver al registro de Productos</a>
            <hr />
        </div>
    </div>
</body>

</html>