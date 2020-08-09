<?php
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 include_once("../../funciones/consultas.php");



 use funciones\mysqlfunciones;
 use consultas_sql\consultas;


 $ejecutar = new mysqlfunciones();
 $consulta = new consultas();

 $rol = $consulta->allEstatus();
 $nombre = $_GET['id'];
 $edicion = $consulta->editEstatus($nombre);
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
   <?php
   $fila = mysqli_fetch_array($edicion);
   ?>
     <form name="formulario"  action="editar_status.php" method="POST">
     <div class="form-group">
     <label class="left full">Editar Estatus </label>
     <input type="hidden" name="id" id="id" class="form-control" required value="<?php echo $fila["id_estatus"]?>"/>
        <input type="text" name="nombre" id="nombre" class="form-control" required value="<?php echo$fila["nombre_estatus"]?>"/>
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