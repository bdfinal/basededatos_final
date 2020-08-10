<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo url;?>pag_inicio.php?id=<?php echo $id_log;?>"><?php echo"Bienvenido (a) ".$_SESSION["nombre"];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo url;?>modulos/usuarios/index.php?id=<?php echo $id_log;?>">Usuarios <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url;?>modulos/roles/index.php?id=<?php echo $id_log;?>">Permisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url;?>modulos/tareas/index.php?id=<?php echo $id_log;?>">Tareas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url;?>modulos/proyectos/index.php?id=<?php echo $id_log;?>">Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url;?>modulos/status/index.php?id=<?php echo $id_log;?>">Estatus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url;?>modulos/dash/index.php?id=<?php echo $id_log;?>">Dashboard</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url;?>logs.php">Logs</a>
      </li>
    </ul>
  </div>
</nav>