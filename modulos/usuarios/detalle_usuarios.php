<?php


 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");


 use funciones\mysqlfunciones;
 $ejecutar = new mysqlfunciones();
 $session = $ejecutar->usuarioActivo();
 
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
 <?php include("includes/header.php")?>
</head>
<body>
  <?php require_once 'conexion.php'; ?>
  <div class="table-reponsive">
    <table class="table table-stripped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo Electrónico</th>
        <th>Password</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $id = $_GET['id'];
      $consulta = "SELECT * FROM usuarios WHERE id_usuario = $id";
      $resultado = mysqli_query($mysqli, $consulta);
      $fila = mysqli_fetch_array($resultado);
      ?>
      <tr>
       <td><?php echo $fila["id_usuario"]; ?></td>
        <td><?php echo $fila["nombre_usr"]; ?></td>
        <td><?php echo $fila["correo_usr"]; ?></td>
        <td><?php echo $fila["password_usr"]; ?></td>
        <td><a href="index.php">Regresar a la tabla principal</a></td>
      </tr>
    </tbody>
    </table>
  </div>
 <?php include("includes/script.php")?>
</body>
</html>