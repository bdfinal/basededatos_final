<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$estatus = $consulta->allProject();
$session = $ejecutar->usuarioActivo();
$id_log=$_SESSION["id"];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>dashboard</title>
</head>
<body>
<?php include("../../includes/nav.php")?>
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../index.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt">Cerrar Sesion</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
   
    
    <th>PROYECTO</th>
    <th>TIEMPO DE TODAS LAS TAREAS</th>
    
    </tr>
    </thead>
    <tbody>
        <?php
    while ($mostrar=mysqli_fetch_array($estatus)){ //array: nos trae un arreglo de datos por posiciones, //2: arreglo asociativo podemos ver los campos de los bd
        ?>
        <tr>
       
        <th><?php echo$mostrar['nombre_proyecto'];?></th>
        <td>
        <?php 
            date_default_timezone_set("America/Mexico_City");
            $fecha_actual=date("Y-m-d H:i:s");
            print"$fecha_actual";
        ?>
    
    </td>
    
    </td>
       
        </tr>
        <?php
    }
        ?>
    </tbody>
    </table>
      </div>
  </div>

  </div>
  </div>
