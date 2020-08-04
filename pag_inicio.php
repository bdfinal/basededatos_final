<?php
include_once("funciones/funciones.php");
include_once("funciones/consultas.php");
include_once("funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$session = $ejecutar->usuarioActivo();
$id_log=$_SESSION["id"];
$logs = $consulta->logsId($id_log);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/header.php");
   ?>

</head>
<body>
  
<?php include("includes/nav.php")?>

<div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="logout.php" class="btn btn-danger  mb-5"><span class="fas fa-sign-out-alt"></span> Cerrar Sesion</a>

      
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
        <th> Nombre de usuario</th>
        <th>Acción realizada</th>
        <th>Descripción</th>
        <th>Fecha</th>
    </tr>
    </thead>
    <tbody>
        <?php
            while($fila = mysqli_fetch_array($logs))  {          
              
        ?>
        <tr>
            <td><?php echo $fila["nombre"]; ?></td>
            <td><?php echo $fila["accion_log"]; ?></td>
            <td><?php echo $fila["descripcion_log"]; ?></td>
            <td><?php echo $fila["fecha_log"]; ?></td>
           
       </tr>
        <?php } ?>
    </tbody>
    </table>
      </div>
  </div>

  </div>
  </div>

<?php include("includes/script.php")?>
</body>
</html>