<?php
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 include_once("../../funciones/consultas.php");
 use funciones\mysqlfunciones;
 use consultas_sql\consultas;
 $ejecutar = new mysqlfunciones();
 $consultas = new consultas();
 $session = $ejecutar->usuarioActivo();
 session_start();
 $usuario= $_SESSION["id"]; 
 $id = $_GET['id_tarea'];
 $tareas = $consultas->tareasId($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Document</title>
</head>
<body>
    <?php
    include("../../includes/conexion.php")
   ?>
   <div class="container mt-5">
   <div class="row">
   <div class="col-sm-12">
   <?php
   $fila = mysqli_fetch_array($tareas);
   ?>
     <form name="formulario"  action="tareas_upd.php" method="POST">
     <div class="form-group">
         <label class="left full">Nombre</label>
         <input type="hidden" name="usuarios_id_usuario" id="usuarios_id_usuario" value="<?php echo $usuario; ?>" class="form-control" />
         <input type="hidden" class="form-control" name="id_tarea" id="id_tarea"  value="<?php echo $fila['id_tarea']; ?>">
         <input type="text" name="nombre_tarea" id="nombre_tarea" class="form-control" required value="<?php echo $fila["nombre_tarea"]?>"/>
     </div>
      <div class="form-group">
      <input type="text" name="fecha_tarea" id="fecha_tarea" class="form-control" required value="<?php echo $fila["fecha_tarea"]?>"/>
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