<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$id = $_GET["id"];
$project = $consulta->projectGet($id);
$session = $ejecutar->usuarioActivo();

$id_log=$_SESSION["id"];
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
  <?php include("../../includes/nav.php")?>
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../logout.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt"></span> Cerrar Sesion</a>
  <a href="all_project.php" class="btn btn-primary float-left mb-5"><span class="fas fa-eye"></span>  Ver todos los proyectos</a>
  </div>
  <div class="container">
<div class="row">
<?php
    while ($mostrar=mysqli_fetch_array($project)){?>
       <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
       <h5 class="card-title text-center"><?php echo $mostrar["nombre_proyecto"]?></h5>
     
         
          <a  id="a_admin"  href="ver_tareas.php?id=<?php echo $mostrar['id_proyecto']; ?>" class="a-style btn btn-dark"><span class="far fa-clipboard"></span> Ver tareas</a>
          <a id="a_all" href="edit_project.php?id=<?php echo $mostrar['id_proyecto']?>" class="a-style btn btn-dark float-left"><span class="far fa-edit"></span> Editar proyecto</a>

         
      </div>
    </div>
  </div>
        <?php }?>

       

</div>
</div>

  
  <?php include("../../includes/script.php")?>
</body>
</html>