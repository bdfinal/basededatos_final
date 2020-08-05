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
$project = $consulta->allProject();
 
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
  <a href="insert_project.php" class="btn btn-primary float-right mb-5"><span class="fas fa-plus-circle"></span> Nuevo proyecto</a>
  <a href="index.php?id=<?php echo $id_log;?>" class="btn btn-primary float-left mb-5"><span class="fas fa-backspace"> Volver a la página anterior</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
    <th> Nombre</th>
    <th> Acciones</th>
    </tr>
    </thead>
    <tbody>
        <?php
    while ($mostrar=mysqli_fetch_array($project)){ //array: nos trae un arreglo de datos por posiciones, //2: arreglo asociativo podemos ver los campos de los bd
        ?>
        <tr>
        <th><?php echo$mostrar['nombre_proyecto'];?></th>
        <td><a href="edit_project.php?id=<?php echo $mostrar['id_proyecto']; ?>">Editar</a>
        <a href="delete_project.php?id=<?php echo $mostrar['id_proyecto']; ?>">Eliminar</a>
    
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