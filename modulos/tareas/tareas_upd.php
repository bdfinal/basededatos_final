<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_POST["id_tarea"];
$nombre =$_POST["nombre_tarea"];
$fecha = $_POST["fecha_creacion"];
$usuario =$_POST["usuarios_id_usuario"];
$id_log=$_SESSION["id"];

$qry= "UPDATE tareas SET
nombre_tarea='$nombre',
fecha_creacion='$fecha',
usuarios_id_usuario='$usuario'
WHERE id_tarea='$id'";
$ejecucion = $ejecutar->ejecutar($qry);


$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('UPDATE',CONCAT('Se ha actualizado registro en la tabla tareas'), ' tareas', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);
//print_r($ejecucion);

header("Location: index.php")
?>