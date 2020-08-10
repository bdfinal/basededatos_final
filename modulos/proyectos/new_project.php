<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;

$ejecutar = new mysqlfunciones();
$id_log=$_SESSION["id"];
$nombre = $_REQUEST["nombre"];

$qry= "INSERT INTO proyectos (nombre_proyecto) VALUES ('$nombre')";
$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('INSERT',CONCAT('Se ha insertado un nuevo registro en la tabla proyectos), ' proyectos', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);

header("Location: all_project.php");