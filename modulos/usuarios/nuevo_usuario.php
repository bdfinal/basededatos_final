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
$id_log = $_REQUEST["id_rol"];

$log_id=$_SESSION["id"];
$qry= "INSERT INTO usuarios (nombre_usr, correo_usr, password_usr, roles_id_rol) 
VALUES ('$nombre', '$correo', '$password','$id_rol')";
$ejecucion = $ejecutar->ejecutar($qry);

$qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
VALUES ('INSERT',CONCAT('Se ha creado un  registro en la tabla usuarios'), ' usuarios', ' $id_log')";
$ejecucion = $ejecutar->ejecutar($qry2);


header("Location: index.php")
?>