<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");


use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();



$id = $_POST['id'];
$nombre = $_POST["nombre"];




$qry= "UPDATE estatus SET
nombre_estatus='$nombre' 
Where id_estatus='$id'";
$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>