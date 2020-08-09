<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$session = $ejecutar->usuarioActivo();
$id_proyecto=$_GET["id"];
$id_log=$_SESSION["id"];
$detalleA = $consulta->detalleIdAsignador($id_proyecto, $id_log);
$detallea = $consulta->detalleIdResponsable($id_proyecto, $id_log);
 //Ejemplo curso PHP aprenderaprogramar.com
 $date = date('Y-m-d H:i:s');


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
    <th> Fecha asignado</th>
    <th> Fecha inicio</th>
    <th> Fecha final</th>
    <th> Estado de la tarea</th>
    <th> Acciones</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($qry1=mysqli_fetch_array($detalleA)){ 
        ?>
    
        <tr>
        <th><?php echo$qry1['tarea'];?></th>
        <th><?php echo$qry1['asignador'];?></th>    
        <th><?php echo$qry1['fecha_asignacion'];?></th>
        <th><?php echo$qry1['fecha_inicio'];?></th>
        <th> <?php echo$qry1['fecha_fin']; ?></th>
       <th><?php echo$qry1['estatus'];?></th>
       <th> <a href="cambiar_estado.php?id=<?php echo$qry1["id_detalle"];?>&id_p=<?php echo$qry1["proyectos_id_proyecto"];?>" >Iniciar tarea </a></th>
       <th> <div id="hidden-div"><a id="funciona" onclick="getElementById('hidden-div').style.display = 'block'" href="cambiar_estadof.php?id=<?php echo$qry1["id_detalle"];?>&id_p=<?php echo$qry1["proyectos_id_proyecto"];?>">Finalizar tarea </a></div></th>
     
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
<script>
   // $('#funciona').hide();
   var a = document.getElementById('funciona')
    a.addEventListener('click',hideshow,false);

    function hideshow() {
        document.getElementById('hidden-div').style.display = 'block'; 
        this.style.display = 'none'

  }
</script>
  <?php include("../../includes/script.php")?>
</body>
</html>