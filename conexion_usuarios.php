<?php
    include_once("funciones/funciones.php");
    include_once("funciones/bd.php");
    use funciones\mysqlfunciones;
    $ejecutar = new mysqlfunciones();
    
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $respuesta = '';
  

    if($usuario  == '' && empty($password)){
        $respuesta = 'Los valores no deben ser vacios';
        header('Location: index.php?data='. $respuesta);
    }else{
        $respuesta = $ejecutar-> usuarioExiste($usuario,$password);
        if($respuesta == 1){
            header('Location: sesiones.php');
            
            $log_usuario= $_SESSION["id"];
   
            $qry="INSERT INTO usuarios(id_usuario, fuente_log, mensaje_log)
            VALUES ('$usuarios', 'usuarios', CONCAT('El usuario:', ' $log_usuario', ' ha iniciado sesion'))";
            $ejecucion = $ejecutar->ejecutar($qry);
          
        }
        else{
            header('Location: index.php?data='. $respuesta);
        }
    }

   
?>