<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");


use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
use consultas_sql\consultas;
$consulta = new consultas();


$id = $_POST['id'];
$nombre =$_POST["nombre"];
$correo = $_POST["correo"];
$password = $_POST["contraseña"];
$id_rol = $_POST["id_rol"];



$qry= "UPDATE usuarios SET
nombre_usr='$nombre', 
correo_usr = '$correo',
password_usr = '$password',
roles_id_rol = '$id_rol'
WHERE id_usuario= $id";
$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>