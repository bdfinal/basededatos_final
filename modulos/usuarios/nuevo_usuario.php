<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$nombre =$_REQUEST["nombre"];
$correo = $_REQUEST["correo"];
$password = $_REQUEST["contraseña"];
$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];

$qry= "INSERT INTO usuarios (nombre_usr,correo_usr, password_usr) 
VALUES ('$nombre', '$correo', '$password')";

$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>