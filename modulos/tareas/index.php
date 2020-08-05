<?php
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 include_once("../../funciones/consultas.php");

 use funciones\mysqlfunciones;
 use consultas_sql\consultas;
 $ejecutar = new mysqlfunciones();
 $consultas = new consultas();
 $session = $ejecutar->usuarioActivo();
 $id_log=$_SESSION["id"];
 $tareas = $consultas->tareasIdusr($id_log);
 $rol=$_SESSION["id_rol"];

 
 
//echo $rol;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
   ?>

    <title>Document</title>
</head>
<body>
 
<?php include("../../includes/nav.php")?>
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">

  <a href="../../logout.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt"> Cerrar Sesion</a>
  <a href="tareas_form.php" class="btn btn-primary float-left mb-5"><span class="fas fa-plus-circle"> Crear tarea</a>
      <?php 
      
      if ($rol == 2){?>
    <a href="asignar_tarea.php" class="btn btn-primary float-left mb-5 ml-5"><span class="fas fa-plus-circle"> Asignar tarea</a>
  </div>
      <?php 
      }
          ?>
  <div class="col-sm-12">
      <div class="table-responsive">
      <table class="table table-stripped">
    <thead>
    <tr>    
        <th>Nombre</th>
        <th>Fecha de creación</th>
        <th>Creado por:</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        
        <?php
            while($fila = mysqli_fetch_array($tareas))            
            {  
        ?>
        <tr>
            <td><?php echo $fila["tarea"]; ?></td>
            <td><?php echo $fila["fecha_asignacion"]; ?></td>
            <td><?php echo $fila["asignador"]; ?></td>
            <td><a href="tareas_edit.php?id=<?php echo $fila["id_tarea"]; ?>">Editar</a>
            <a href="tareas_del.php?id=<?php echo $fila["id_tarea"]; ?>; ?>">Eliminar</a>
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