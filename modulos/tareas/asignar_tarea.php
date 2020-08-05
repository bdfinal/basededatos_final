<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/bd.php");
include_once("../../funciones/consultas.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consultas = new consultas();
session_start();
$usuario=$_SESSION["id"];
$tareas = $consultas->tareasGet();
$usuarios = $consultas->usr();
$estatus = $consultas->estatus();
$proyecto = $consultas->allProject();
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
            <form name="form_editar"  action="tarea_asignada.php" method="POST">
               <input type="hidden" name="id_asignador" id="id_asignador" value="<?php echo $usuario; ?>" class="form-control" />
               <?php 
                        
                            while($qry = mysqli_fetch_array($estatus)){
                        ?>  
                            <input type="hidden" name="estatus_id_estatus" id="estatus_id_estatus" value="<?php echo $qry["id_estatus"];?>" class="form-control" />
                        <?php } ?>
            
                <div class="form-group">
                    <label class="left full">Seleccionar tarea: </label>
                    <select class="form-control" name="tareas" id="tareas">
                    <option >Seleccionar tarea</option>
                        <?php 
                        
                            while($fila1 = mysqli_fetch_array($tareas)){
                        ?>  
                            <option value="<?php echo $fila1["id_tarea"] ?>" ><?php echo $fila1["nombre_tarea"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="left full">Seleccionar responsable: </label>
                    <select class="form-control" name="responsable" id="responsable">
                    <option >Seleccionar responsable</option>
                        <?php 
                        
                            while($fila2 = mysqli_fetch_array($usuarios)){
                        ?>  
                            <option value="<?php echo $fila2["id_usuario"] ?>" ><?php echo $fila2["nombre_usr"]; ?></option>
                        <?php } ?>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label class="left full">Seleccionar proyecto: </label>
                    <select class="form-control" name="proyecto" id="proyecto">
                    <option >Seleccionar proyecto</option>
                        <?php 
                        
                            while($fila2 = mysqli_fetch_array($proyecto)){
                        ?>  
                            <option value="<?php echo $fila2["id_proyecto"] ?>" ><?php echo $fila2["nombre_proyecto"]; ?></option>
                        <?php } ?>
                    </select>
                    
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