<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use consultas_sql\consultas;
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();




$id_rol = $_REQUEST["nombre_rol"];

$qry= "INSERT INTO roles ( nombre_rol) 
VALUES ('$id_rol')";

$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>