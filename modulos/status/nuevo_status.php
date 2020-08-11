<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id_log=$_SESSION["id"];
$estatus1 =$_REQUEST["estatus1"];


$qry= "INSERT INTO estatus (nombre_estatus) 
VALUES ('$estatus1')";

$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('INSERT',CONCAT('Se ha insertado un nuevo registro estatus'), ' estatus', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);


header("Location: index.php")
?>