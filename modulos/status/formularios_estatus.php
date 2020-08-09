<?php
 include_once("../../funciones/consultas.php");
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 use funciones\mysqlfunciones;
 use consultas_sql\consultas;
 $consulta = new consultas();
 $ejecutar = new mysqlfunciones();
 $rol = $consulta->estatus7();
 $session = $ejecutar->usuarioActivo();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php")?>
    <title>Nuevo Estatus</title>
</head>
<body>

  
   <div class="container mt-5">
   <div class="row">
   <div class="col-sm-12">
   
     <form name="formulario"  action="nuevo_status.php">
     <div class="form-group">
     <label class="left full">Nombre del estatus</label>
        <input type="text" name="estatus1" id="estatus1" placeholder="Ingresa un nuevo estatus" class="form-control" required />
     </div>
    
      
        </select>
        </div>
    <div class="form-group">
    <input type="submit" value="Registrar estatus" class="btn btn-success">
    </div>
        
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>