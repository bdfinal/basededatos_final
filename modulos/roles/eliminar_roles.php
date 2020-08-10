<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();


$log_id=$_SESSION["id"];
$id_log=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$id = $_GET["id"];
$qry= "DELETE FROM roles WHERE id_rol = $id";
$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('DELETE',CONCAT('Se ha eliminado un  registro en la tabla roles'), ' roles', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);
header("Location: index.php")
?>