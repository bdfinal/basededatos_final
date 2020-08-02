<?php
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$nombre = $_REQUEST["nombre_tarea"];
$fecha = $_REQUEST["fecha_creacion"];
$usuario = $_REQUEST["usuarios_id_usuario"];

$qry="insert into tareas (nombre_tarea, fecha_creacion, usuarios_id_usuario ) values ('$nombre', '$fecha', '$usuario')";
$ejecucion = $ejecutar->ejecutar($qry);


header("Location: index.php")

?>