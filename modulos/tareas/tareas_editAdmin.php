<?php
 include_once("../../funciones/funciones.php");
 include_once("../../funciones/bd.php");
 include_once("../../funciones/consultas.php");
 use funciones\mysqlfunciones;
 use consultas_sql\consultas;
 $ejecutar = new mysqlfunciones();
 $consultas = new consultas();
 $session = $ejecutar->usuarioActivo();
 $usuario= $_SESSION["id"]; 
 $id = $_GET['id'];
 $alltareas= $consultas->tareasGet();
 $detalle= $consultas->id_detalle($id);
 $proyectos=$consultas->allProject();
$usr=$consultas->usr();

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
  while($qry1=mysqli_fetch_array($detalle)){
   ?>
     <form name="formulario"  action="tareas_upd.php" method="POST">
     <div class="form-group">
     <input type="hidden" name="id_detalle" id="id_detalle" value="<?php echo $qry1["id_detalle"] ?>" class="form-control" />
     <input type="hidden" name="id_estatus" id="id_estatus" value="<?php echo $qry1["estatus_id_estatus"] ?>" class="form-control" />
         <label class="left full">Tarea</label>
         <select name="id_tarea" id="id_tarea" class="form-control"required >
       <?php
        while ($qry=mysqli_fetch_array($alltareas)){ 
           ?>      
          <option value="<?php echo $qry["id_tarea"] ?>" <?php if ($qry1["tareas_id_tarea"]==$qry["id_tarea"]){ ?> selected="selected" <?php } ?>><?php echo $qry["nombre_tarea"]; ?></option>
           <?php 
         }
         ?>
        </select>
     </div>
      <div class="form-group">
      <label class="left full">Proyecto</label>
      <select name="id_proyecto" id="id_proyecto" class="form-control"required >
       <?php
        while ($qry3=mysqli_fetch_array($proyectos)){ 
           ?>      
          <option value="<?php echo $qry3["id_proyecto"] ?>" <?php if ($qry1["proyectos_id_proyecto"]==$qry3["id_proyecto"]){ ?> selected="selected" <?php } ?>><?php echo $qry3["nombre_proyecto"]; ?></option>
           <?php 
         }
         ?>
        </select>
      </div> 
      <div class="form-group">
      <label class="left full">Responsable</label>
      <select name="id_responsable" id="id_responsable" class="form-control"required >
       <?php
        while ($qry4=mysqli_fetch_array($usr)){ 
           ?>      
          <option value="<?php echo $qry4["id_usuario"] ?>" <?php if ($qry1["id_responsable"]==$qry4["id_usuario"]){ ?> selected="selected" <?php } ?>><?php echo $qry4["nombre_usr"]; ?></option>
           <?php 
         }
         ?>
        </select>
      </div> 
      <div class="form-group">
      <label class="left full">Fecha de creación</label>
      <input type="datetime-local" name="fecha_asignacion" id="fecha_asignacion" class="form-control" required />
      </div> 
    <div class="form-group">
    <input type="submit" value="Guardar" class="btn btn-success">
    </div>
        <?php
  }
        ?>
              </form>
          </div>
   </div>
   </div>
  

  
<?php include("../../includes/script.php")?>
</body>
</html>