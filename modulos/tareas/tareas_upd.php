<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_POST["id_tarea"];
$nombre =$_POST["nombre_tarea"];
$fecha = $_POST["fecha_creacion"];
$usuario =$_POST["usuarios_id_usuario"];


$qry= "UPDATE tareas SET
nombre_tarea='$nombre',
fecha_creacion='$fecha',
usuarios_id_usuario='$usuarios_id_usuario'
WHERE id_tarea='$id'";
$ejecucion = $ejecutar->ejecutar($qry);




header("Location: index.php")
?>