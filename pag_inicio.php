<?php
include_once("funciones/funciones.php");
include_once("funciones/consultas.php");
include_once("funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$project = $consulta->projectGet();
$session = $ejecutar->usuarioActivo();
$id_log=$_SESSION["id"];
$logs = $consulta->logsId($id_log);

//print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/header.php");
   ?>

</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo"Bienvenido (a) ".$_SESSION["nombre"];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Usuarios <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Permisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tareas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proyectos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Status
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

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
           while($fila =  mysqli_fetch_array($logs)){
            
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