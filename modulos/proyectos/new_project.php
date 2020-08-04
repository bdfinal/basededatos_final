<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;

$ejecutar = new mysqlfunciones();

$nombre = $_REQUEST["nombre"];

$qry= "INSERT INTO proyectos (nombre_proyecto) VALUES ('$nombre')";

$ejecucion = $ejecutar->ejecutar($qry);

header("Location: all_project.php");