<?php
require_once("../models/modelo.php");
$serverName = 'DESKTOP-12HO3KM\TESTELOPEZ';
$dbName = 'CompanyX';
$username = 'admin';
$password = 'root';
$conection = array("Database" => $dbName, "UID" => $username, "PWD" => $password, "CharacterSet" => "UTF-8");
$con = sqlsrv_connect($serverName, $conection);
?>