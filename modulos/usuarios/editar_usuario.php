<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");



use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();



$id = $_POST['id'];
$nombre =$_POST["nombre"];
$correo = $_POST["correo"];
$password = $_POST["contraseña"];

$log_id=$_SESSION["id"];
$log_name=$_SESSION["nombre"];



$qry= "UPDATE usuarios SET
nombre='$nombre', 
correo_usr = '$correo',
password_usr = '$password'
WHERE id_usuario= $id";
$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>