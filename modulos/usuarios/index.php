<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$usr = $consulta->usr();
$session = $ejecutar->usuarioActivo();
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>Usuarios</title>
</head>
<body>
 
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../index.php" class="btn btn-danger float-right mb-5">Cerrar Sesion</a>
  <a href="formularios_usuarios.php" class="btn btn-primary float-left mb-5">Nuevo</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
    <th> Nombre</th>
    <th>Correo electronico</th>
    <th>Roles</th>
    <th> Acciones </th>
    </tr>
    </thead>
    <tbody>
        <?php
    while ($mostrar=mysqli_fetch_array($usr)){ 
        ?>
        <tr>
        <th><?php echo$mostrar['nombre_usr'];?></th>
        <th><?php echo$mostrar['correo_usr'];?></th>
        <th><?php echo$mostrar['nombre_rol'];?></th>
        <td><a href="fedicion_usuario.php?id=<?php echo $mostrar['id_usuario']; ?>">Editar</a>
        <a href="eliminar_usuarios.php?id=<?php echo $mostrar['id_usuario']; ?>">Eliminar</a>
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