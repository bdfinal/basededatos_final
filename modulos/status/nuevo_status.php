<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$estatus1 =$_REQUEST["estatus1"];


$qry= "INSERT INTO estatus (nombre_estatus) 
VALUES ('$estatus1')";

$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>