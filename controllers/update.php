<?php
include "conexion.php";
require_once("../models/modelo.php");
$services = new Producto();
$datosUpdate;

if ((isset($_GET['id'])) && ($_GET['id'] != ' ')) {
    $datosUpdate = $services->buscarProductoById($_GET['id']);
}
require_once("../views/updateView.php");
?>