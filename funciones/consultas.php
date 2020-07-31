<?php

namespace consultas_sql;
use funciones\mysqlfunciones;
 class consultas{
     
public function projectGet(){
    $qry = 'SELECT * FROM proyectos';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function projectId($id){
    $qry = 'SELECT * FROM proyectos
    WHERE id_proyecto='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function tareasGet(){
    $qry = 'SELECT * FROM tareas';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}



 }


?>