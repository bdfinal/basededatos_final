<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_GET['id'];
    
    $qry = "DELETE FROM tareas
    WHERE id_tarea='$id'";
    $ejecucion = $ejecutar->ejecutar($qry);

    header("Location: index.php");

?>