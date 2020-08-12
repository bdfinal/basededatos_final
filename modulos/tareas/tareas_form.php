<?php

include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consultas = new consultas();
$session = $ejecutar->usuarioActivo();
$usuario=$_SESSION["id"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12">
            <form name="form_editar"  action="tareas_ins.php" method="POST">
                <input type="hidden" name="usuarios_id_usuario" id="usuarios_id_usuario" value="<?php echo $usuario; ?>" class="form-control" />
                <div class="form-group">
                    <label class="left full">Nombre</label>
                    <input type="text" name="nombre_tarea" id="nombre_tarea" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="left full">Fecha de creación</label>
                    <input type="datetime-local" name="fecha_creacion" id="fecha_creacion" class="form-control"/>
                    
                </div>
            
                <div class="form-group">
                    <input type="submit" value="Guardar" class="btn btn-success">
                </div>
                    
            </form>
        </div>
    </div>
</div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>