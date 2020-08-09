<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$estatus = $consulta->estatus7();
$session = $ejecutar->usuarioActivo();
$id_log=$_SESSION["id"];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>Estatus</title>
</head>
<body>
<?php include("../../includes/nav.php")?>
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../index.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt">Cerrar Sesion</a>
  <a href="formularios_estatus.php" class="btn btn-primary float-left mb-5">Nuevo</a>
  </div>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
   
    
    <th>ESTATUS</th>
    <th>ACCIONES</th>
    
    </tr>
    </thead>
    <tbody>
        <?php
    while ($mostrar=mysqli_fetch_array($estatus)){ //array: nos trae un arreglo de datos por posiciones, //2: arreglo asociativo podemos ver los campos de los bd
        ?>
        <tr>
       
        <th><?php echo$mostrar['nombre_estatus'];?></th>
        
        <td><a href="edicion_estatus.php?id=<?php echo $mostrar['id_estatus']; ?>">Editar</a>
        <a href="eliminar_status.php?id=<?php echo $mostrar['id_estatus']; ?>">Eliminar</a>
    
     
    
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