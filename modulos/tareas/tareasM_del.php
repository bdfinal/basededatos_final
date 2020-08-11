<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");

use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
$id = $_GET['id'];
$id_log=$_SESSION["id"];
    
    $qry = "DELETE FROM tareas
    WHERE id_tarea='$id'";
    $ejecucion = $ejecutar->ejecutar($qry);

    $qry2="INSERT INTO logs(accion_log, descripcion_log, fuente_log, responsable_log)
            VALUES ('DELETE',CONCAT('Se ha eliminado un registro en la tabla tareas'), ' tareas', ' $id_log')";
            $ejecucion = $ejecutar->ejecutar($qry2);
            //print_r($ejecucion);

    header("Location: index.php");

?>