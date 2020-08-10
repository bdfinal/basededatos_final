<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$nombre =$_REQUEST["nombre"];
$correo = $_REQUEST["correo"];
$password = $_REQUEST["contraseña"];
$id_rol = $_REQUEST["id_rol"];

$log_id=$_SESSION["id"];
$qry= "INSERT INTO usuarios (nombre_usr, correo_usr, password_usr, roles_id_rol) 
VALUES ('$nombre', '$correo', '$password','$id_rol')";
$ejecucion = $ejecutar->ejecutar($qry);


header("Location: index.php")
?>