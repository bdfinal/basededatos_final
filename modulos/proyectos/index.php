<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$project = $consulta->projectGet();
//$session = $ejecutar->usuarioActivo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>Proyectos</title>
</head>
<body>
    <?php
   include("../../includes/conexion.php")
   
    ?>
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../cerrarsesion.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt"></span> Cerrar Sesion</a>
  <a href="formularios_usuarios.php" class="btn btn-primary float-left mb-5"><span class="fa fa-plus-circle"></span>  Nuevo</a>
  </div>
  <div class="container">
<div class="row">
<?php
    while ($mostrar=mysqli_fetch_array($project)){?>
       <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
       <h5 class="card-title text-center"><a href="all_project.php"><?php echo $mostrar["nombre_proyecto"]?></a></h5>
        <?php if($mostrar["id_proyecto"]==1){?>
          <a id="a" href="modulos/usuarios/index.php" class="a-style btn btn-dark"><span class="fas fa-pencil-alt"></span> Ir a tareas</a>
          <a id="a" href="modulos/usuarios/index.php" class="a-style btn btn-dark float-left"><span class="fa fa-plus-circle"></span> Agregar tareas</a>

          <?php } else {?>
            <a id="a" href="modulos/usuarios/index.php" class="a-stile btn btn-dark"><span class="fas fa-pencil-alt"></span> Ir a tareas</a>
        <?php } ?>
      </div>
    </div>
  </div>
        <?php }?>
 

       

</div>
</div>

  
  <?php include("../../includes/script.php")?>
</body>
</html>