<?php
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 use funciones\mysqlfunciones;
 $ejecutar = new mysqlfunciones();
 $session = $ejecutar->usuarioActivo();
 
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
   
     <form name="formulario"  action="new_project.php">
     <div class="form-group">
     <label class="left full">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required />
     </div>
      
    
       
    <div class="form-group">
    <input type="submit" value="Crear proyecto" class="btn btn-success">
    </div>
        
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>