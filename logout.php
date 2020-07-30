<?php
include_once("funciones/funciones.php");
include_once("funciones/bd.php");
use funciones\mysqlfunciones;
$ejecutar = new mysqlfunciones();
session_start();
session_destroy();
//header('Location: index.php');