<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use consultas_sql\consultas;
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();




$id_rol = $_REQUEST["nombre_rol"];
$id_log = $_REQUEST["nombre_rol"];

$qry= "INSERT INTO roles ( nombre_rol) 
VALUES ('$id_rol')";

$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('INSERT',CONCAT('Se ha creado un  registro en la tabla roles'), ' roles', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);


header("Location: index.php")
?>