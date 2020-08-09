<?php 
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id_log = $_SESSION["id"];
$id_p=$_GET["id_p"];
$id = $_GET["id"];
$qry="UPDATE detalle SET fecha_fin = CURRENT_TIMESTAMP, estatus_id_estatus= 3
  WHERE id_detalle='$id'";
$ejecucion = $ejecutar->ejecutar($qry);

header("Location: ver_tareas.php?id=$id_p");
?>