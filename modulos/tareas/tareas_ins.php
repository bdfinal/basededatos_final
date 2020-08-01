<?php
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
session_start();
$nombre = $_REQUEST["nombre_tarea"];
$fecha = $_REQUEST["fecha_creacion"];
$usuario = $_REQUEST["usuarios_id_usuario"];

$qry="insert into tareas (nombre_tarea, fecha_creacion, usuarios_id_usuario ) values ('$nombre', '$fecha', '$usuario')";
$ejecutar= $ejecucion->ejecuta($qry);
echo $ejecutar;

header("Location: index.php")

?>