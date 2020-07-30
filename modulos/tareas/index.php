<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$tareas = $consulta->tareasGet();
include_once("../../funciones/bd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
   ?>

    <title>Document</title>
</head>
<body>
    <?php

   
    ?>
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../cerrarsesion.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt"></span> Cerrar Sesion</a>
  <a href="tareas_form.php" class="btn btn-primary float-left mb-5"><span class="fa fa-plus-circle"></span>  Nuevo</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
        <th> Nombre</th>
        <th>Fecha de creación</th>
        <th>Creado por:</th>
        <th>Acciones:</th>
    </tr>
    </thead>
    <tbody>
        <?php
            while($fila = mysqli_fetch_array($tareas))            
            {  
        ?>
        <tr>
            <td><?php echo $fila["nombre_tarea"]; ?></td>
            <td><?php echo $fila["fecha_creacion"]; ?></td>
            <td><?php echo $fila["usuarios_id_usuario"]; ?></td>
            <td><a href="tareas-edit.php?id=<?php echo $fila["id_tarea"]; ?>">Editar</a>
            <a href="tareas-del.php?id=<?php echo $fila["id_tarea"]; ?>; ?>">Eliminar</a>
            </td>
       </tr>
        <?php } ?>
    </tbody>
    </table>
      </div>
  </div>

  </div>
  </div>

  
  <?php include("../../includes/script.php")?>
</body>
</html>