<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
    $id = $_GET['id'];
    
    $qry = "delete from tareas where id_tarea = $id ";
    $ejecucion = $ejecutar->ejecutar($qry);

?>