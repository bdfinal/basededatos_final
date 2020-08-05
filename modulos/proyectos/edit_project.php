<?php
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 include_once("../../funciones/consultas.php");
 use funciones\mysqlfunciones;
 use consultas_sql\consultas;
 $ejecutar = new mysqlfunciones();
 $consultas = new consultas();
 $session = $ejecutar->usuarioActivo();
 $id = $_GET['id'];
 $project = $consultas->projectId($id);
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
   <?php
   $fila = mysqli_fetch_array($project);
   ?>
     <form name="formulario"  action="update_project.php" method="POST">
     <div class="form-group">
     <label class="left full">Nombre</label>
     <input type="hidden" name="id" id="id" class="form-control" required value="<?php echo $fila["id_proyecto"]?>"/>
        <input type="text" name="nombre" id="nombre" class="form-control" required value="<?php echo$fila["nombre_proyecto"]?>"/>
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