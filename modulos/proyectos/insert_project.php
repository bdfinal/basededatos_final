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
   
     <form name="formulario"  action="nuevo_usuario.php">
     <div class="form-group">
     <label class="left full">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required />
     </div>
        <div class="form-group">
        <label class="left full">Correo</label>
        <input type="text" name="correo" id="correo" class="form-control" placeholder="Ingresa un correo electronico" required/>
        </div>
        <div class="form-group">

        <label class="left full">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" class="form-control" required placeholder="Ingresa una contraseña" />
        </div>
       
    <div class="form-group">
    <input type="submit" value="Registrar usuario" class="btn btn-success">
    </div>
        
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>