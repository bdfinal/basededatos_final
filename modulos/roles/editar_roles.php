<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");


use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();



$id = $_POST['id'];
$id_log=$_SESSION["id"];
$nombre = $_POST["nombre"];




$qry= "UPDATE roles SET
nombre_rol='$nombre' 
Where id_rol='$id'";
$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('UPDATE',CONCAT('Se ha editado un  registro en la tabla roles'), ' roles', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);



header("Location: index.php")
?>