<?php
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id_asignador = $_REQUEST["id_asignador"];
$estatus = $_REQUEST["estatus_id_estatus"];
$id_tarea = $_REQUEST["tareas"];
$id_responsable = $_REQUEST["responsable"];
$id_proyecto = $_REQUEST["proyecto"];


$qry="insert into detalle (tareas_id_tarea, proyectos_id_proyecto, id_asignador, id_responsable, estatus_id_estatus )
 values ('$id_tarea', '$id_proyecto', '$id_asignador', '$id_responsable', '$estatus')";
$ejecucion = $ejecutar->ejecutar($qry);


header("Location: index.php")

?>