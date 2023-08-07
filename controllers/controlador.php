<?php
require_once("../models/modelo.php");
$services = new Producto();
$datosProductos = $services->getProductos();
$datosCategorias = $services->getCategorias();
require_once("../views/vista.php");
?>