<?php
include_once("../../funciones/bd.php");
include_once("../../funciones/funciones.php");
session_start();
$usuario=$_SESSION["id"];
$rol=$_SESSION["id_rol"];
echo $rol;
//echo $usuario;
$consulta = "select t.*, u.nombre_usr as nombre
            from tareas t
            inner join usuarios u on t.usuario_id_usuario=u.id_usuario
            where u.id_usuario='$usuario'";
            $resultado = mysqli_query($mysqli, $consulta);
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
      <?php 
      if ($rol == 2){?>
  <a href="../../cerrarsesion.php" class="btn btn-danger float-right mb-5">Cerrar Sesion</a>
  <a href="tareas_form.php" class="btn btn-primary float-left mb-5">Crear tarea</a>
  <a href="tareas_form.php" class="btn btn-primary float-left mb-5">Asignar tarea</a>
  </div>
      <?php }else{ 
          ?>
  <a href="../../cerrarsesion.php" class="btn btn-danger float-right mb-5">Cerrar Sesion</a>
      <?php } ?>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
        <th> Nombre</th>
        <th>Fecha de creación</th>
        <th>Creado por:</th>
    </tr>
    </thead>
    <tbody>
        <?php
            
            while($fila = mysqli_fetch_array($resultado))            
            {  
        ?>
        <tr>
            <td><?php echo $fila["nombre_tarea"]; ?></td>
            <td><?php echo $fila["fecha_creacion"]; ?></td>
            <td><?php echo $fila["nombre"]; ?></td>
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