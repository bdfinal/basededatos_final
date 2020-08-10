<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$session = $ejecutar->usuarioActivo();
$id_log=$_SESSION["id"];
$estatus = $consulta->projectGet($id_log);
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
       <?php
       $consulta= new consultas();
       $id_proyecto=$mostrar['proyectos_id_proyecto'];
       $horas = $consulta->duracionP($id_proyecto, $id_log);
       ?>
        <th><?php echo$mostrar['nombre_proyecto'];?></th>
        <?php while($qry=mysqli_fetch_array($horas)){
            $tiempo_en_segundos=$qry['total'];
            $hora = floor($tiempo_en_segundos / 3600);
            $minutos = floor(($tiempo_en_segundos - ($hora * 3600)) / 60);
            $segundos = $tiempo_en_segundos - ($hora * 3600) - ($minutos * 60);
         ?>
       
        <th><?php echo'El proyecto duro un total de: '. $hora.' horas ' .$minutos.' minutos '. $segundos.' segundos';?></th>
        <?php
    }
    ?>
        <td>
        
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
</body>
</html>