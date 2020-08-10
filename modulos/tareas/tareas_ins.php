<?php
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id_log=$_SESSION["id"];
$nombre = $_REQUEST["nombre_tarea"];
$fecha = $_REQUEST["fecha_creacion"];
$usuario = $_REQUEST["usuarios_id_usuario"];

$qry="insert into tareas (nombre_tarea, fecha_creacion, usuarios_id_usuario ) values ('$nombre', '$fecha', '$usuario')";
$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('INSERT',CONCAT('Se ha insertado un nuevo registro en la tabla tareas), ' tareas', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);
//print_r($ejecucion);
header("Location: index.php")

?>