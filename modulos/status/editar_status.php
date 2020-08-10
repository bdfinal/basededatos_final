<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");


use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();

$id = $_POST['id'];
$id_log = $_POST['id'];
$nombre = $_POST["nombre"];

$qry= "UPDATE estatus SET
nombre_estatus='$nombre' 
Where id_estatus='$id'";
$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('UPDATE',CONCAT('Se ha editado un registro en la tabla estatus'), ' estatus', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);


header("Location: index.php")
?>