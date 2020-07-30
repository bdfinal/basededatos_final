<?php
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 include_once("../../funciones/consultas.php");



 use funciones\mysqlfunciones;
 use consultas_sql\consultas;


 $ejecutar = new mysqlfunciones();
 $consultas = new consultas();
 $session = $ejecutar->usuarioActivo();
 $id_usuario = $_GET['id'];
 $edicion = $consultas->editUsr($id_usuario);


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
   $fila = mysqli_fetch_array($edicion);
   ?>
     <form name="formulario"  action="editar_usuario.php" method="POST">
     <div class="form-group">
     <label class="left full">Nombre</label>
     <input type="hidden" name="id" id="id" class="form-control" required value="<?php echo $fila["id_usuario"]?>"/>
        <input type="text" name="nombre" id="nombre" class="form-control" required value="<?php echo$fila["nombre_usr"]?>"/>
     </div>
        <div class="form-group">
        <label class="left full">Correo</label>
        <input type="text" name="correo" id="correo" class="form-control" required value="<?php echo$fila["correo_usr"]?>"/>
        </div>
        <div class="form-group">
        <label class="left full">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" class="form-control" required placeholder="Ingresa una contraseña nueva" />
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