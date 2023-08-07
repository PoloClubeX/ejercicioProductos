<?php
require_once("../models/modelo.php");
$services = new Producto();
$datos = $services->getProductos();
$datos = $services->getCategorias();
require_once("../views/vista.php");
?>