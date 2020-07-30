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
            header('Location: modulos/usuarios/index.php');
          
        }
        else{
            header('Location: index.php?data='. $respuesta);
        }
    }

   
?>
    