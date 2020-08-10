<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_POST["id"];
$nombre =$_POST["nombre"];


$qry= "UPDATE proyectos SET
nombre_proyecto='$nombre'
WHERE id_proyecto='$id'";
$ejecucion = $ejecutar->ejecutar($qry);


$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('UPDATE',CONCAT('Se ha modificado un  registro en la tabla proyectos'), ' proyectos', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);

header("Location: all_project.php")
?>