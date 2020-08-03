<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");


use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();



$id = $_POST['id'];
$nombre = $_POST["nombre"];




$qry= "UPDATE roles SET
nombre_rol='$nombre' 
Where id_rol='$id'";
$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>