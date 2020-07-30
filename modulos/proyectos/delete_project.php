<?php
session_start();
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();

$id = $_GET["id"];
$qry= "DELETE FROM proyectos WHERE id_proyecto = $id";
$ejecucion = $ejecutar->ejecutar($qry);

header("Location: all_project.php");