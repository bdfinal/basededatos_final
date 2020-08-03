<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();


$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$id = $_GET["id"];
$qry= "DELETE FROM roles WHERE id_rol = $id";
$ejecucion = $ejecutar->ejecutar($qry);
header("Location: index.php")
?>