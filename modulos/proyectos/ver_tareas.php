<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$id=$_GET["id"];
$detalleA = $consulta->detalleIdAsignador($id);
$detallea = $consulta->detalleIdResponsable($id);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>Document</title>
</head>
<body>
 
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../logout.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt"></span> Cerrar Sesion</a>
  <a href="index.php" class="btn btn-primary float-left mb-5"><span class="fas fa-backspace"> Volver a la página anterior</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
    <th> Tareas<span</th>
    <th> Asignado por</th>
    <th> Asignado a</th>
    <th> Fecha asignado</th>
    <th> Estado de la tarea</th>
    </tr>
    </thead>
    <tbody>
        <?php
    while ($mostrar=mysqli_fetch_array($detalleA)){ //array: nos trae un arreglo de datos por posiciones, //2: arreglo asociativo podemos ver los campos de los bd
        ?>
        <tr>
        <th><?php echo$mostrar['tarea'];?></th>
        <th><?php echo$mostrar['asignador'];?></th>
        <?php
    while ($qry=mysqli_fetch_array($detallea)){ //array: nos trae un arreglo de datos por posiciones, //2: arreglo asociativo podemos ver los campos de los bd
        ?>
        <th><?php echo$qry['responsable'];?></th>
        <?php
    }
        ?>
        <th><?php echo$mostrar['fecha_asignacion'];?></th>
        <th><?php echo$mostrar['estatus'];?></th>
        
    
    
       
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

  
  <?php include("../../includes/script.php")?>
</body>
</html>