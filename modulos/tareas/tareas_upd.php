<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_POST["id_detalle"];
$tarea =$_POST["id_tarea"];
$proyecto = $_POST["id_proyecto"];
$responsable =$_POST["id_responsable"];
$fecha=$_POST["fecha_asignacion"];
$id_log=$_SESSION["id"];
$estatus=$_POST["id_estatus"];

$qry= "UPDATE detalle SET
tareas_id_tarea='$tarea',
proyectos_id_proyecto='$proyecto',
id_asignador='$id_log',
id_responsable='$responsable',
fecha_asignacion='$fecha',
estatus_id_estatus='$estatus'
WHERE id_detalle='$id'";
$ejecucion = $ejecutar->ejecutar($qry);


$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('UPDATE',CONCAT('Se ha actualizado registro en la tabla tareas'), ' tareas', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);
//print_r($ejecucion);

header("Location: index.php")
?>