<?php
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id_log=$_SESSION["id"];
$id = $_GET["id"];
$qry= "DELETE FROM proyectos WHERE id_proyecto = $id";
$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('DELETE',CONCAT('Se ha eliminado un registro en la tabla proyectos), ' proyectos', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);
header("Location: all_project.php");