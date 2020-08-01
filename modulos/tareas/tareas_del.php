<?php
require_once '../../funciones/bd.php';
    $id = $_GET['id'];
    
    $consulta = "delete from tareas where id_tarea = $id ";
    mysqli_query($mysqli, $consulta);
    header('location: index.php');

?>