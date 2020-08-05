<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$session = $ejecutar->usuarioActivo();
$id=$_GET["id"];
$id_log=$_SESSION["id"];
$detalleA = $consulta->detalleIdAsignador($id, $id_log);
$detallea = $consulta->detalleIdResponsable($id, $id_log);
 
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
  <a href="index.php?id=<?php echo $id_log;?>" class="btn btn-primary float-left mb-5"><span class="fas fa-backspace"> Volver a la página anterior</a>
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
    while ($qry1=mysqli_fetch_array($detalleA)){ 
        ?>
        <tr>
        <th><?php echo$qry1['tarea'];?></th>
        <th><?php echo$qry1['asignador'];?></th>
        <?php while($qry2=mysqli_fetch_array($detallea)){
            ?>
            <th><?php echo$qry2['responsable'];?></th>
        <?php
    }
    ?>
        <th><?php echo$qry1['fecha_asignacion'];?></>
        <th><?php echo$qry1['estatus'];?></th>
        
        

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

  
  <?php include("../../includes/script.php")?>
</body>
</html>