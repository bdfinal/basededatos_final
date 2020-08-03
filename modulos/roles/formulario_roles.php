<?php
 include_once("../../funciones/consultas.php");
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 use funciones\mysqlfunciones;
 use consultas_sql\consultas;
 $consulta = new consultas();
 $ejecutar = new mysqlfunciones();
 $rol = $consulta->rol();
 $session = $ejecutar->usuarioActivo();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Roles</title>
</head>
<body>

  
   <div class="container mt-5">
   <div class="row">
   <div class="col-sm-12">
   
     <form name="formulario"  action="nuevo_roles.php">
     <div class="form-group">
     <label class="left full">Nuevo rol</label>
        <input type="text" name="nombre_rol" id="nombre_rol" class="form-control" required />
     </div>
    <div class="form-group">
    <input type="submit" value="Registra un nuevo Rol " class="btn btn-success">
    </div>
        
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>