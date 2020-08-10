<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();


$log_id=$_SESSION["id"];
$id_log=$_SESSION["id"];
$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('DELETE',CONCAT('Se ha eliminado un registro en la tabla estatus'), ' estatus', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);
$log_name=$_SESSION["nombre"];



$id = $_GET["id"];
$qry= "DELETE FROM estatus WHERE id_estatus = $id";
$ejecucion = $ejecutar->ejecutar($qry);
header("Location: index.php")
?>