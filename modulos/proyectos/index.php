<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$project = $consulta->projectGet();
$session = $ejecutar->usuarioActivo();
$val_usr=$_SESSION["id_rol"];
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>Proyectos</title>
</head>
<body>
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../logout.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt"></span> Cerrar Sesion</a>
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
        <?php if($val_usr==2){?>
         
          <a  id="a_admin"  href="ver_tareas.php?id=<?php echo $mostrar['id_proyecto']; ?>" class="a-style btn btn-dark"><span class="fas fa-pencil-alt"></span> Ver tareas</a>
          <a id="a_all" href="modulos/usuarios/index.php" class="a-style btn btn-dark float-left"><span class="fa fa-plus-circle"></span> Agregar tareas</a>

          <?php } else {?>
            <a id="a_ll" href="ver_tareas.php?id=<?php echo $mostrar["id_proyecto"];?>" class="a-stile btn btn-dark"><span class="fas fa-pencil-alt"></span> Ver tareas</a>
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