<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$rol = $consulta->rol();
$session = $ejecutar->usuarioActivo();
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>ROLES</title>
</head>
<body>
 
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../index.php" class="btn btn-danger float-right mb-5">Cerrar Sesion</a>
  <a href="formulario_roles.php" class="btn btn-primary float-left mb-5">Nuevo</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
    <th>Roles</th>
    <th> Acciones </th>
    </tr>
    </thead>
    <tbody>
        <?php
    while ($mostrar=mysqli_fetch_array($rol)){ 
        ?>
        <tr>
        <th><?php echo$mostrar['nombre_rol'];?></th>
        <td><a href="fedicion_roles.php?id=<?php echo $mostrar['id_rol']; ?>">Editar</a>
        <a href="eliminar_roles.php?id=<?php echo $mostrar['id_rol']; ?>">Eliminar</a>
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