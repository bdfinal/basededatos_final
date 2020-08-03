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
public function detalleIdAsignador($id){
    $qry="select s.*,  d.nombre_estatus as estatus, e.nombre_tarea as tarea, c.nombre_usr as asignador 
    from detalle s 
    left join usuarios c on c.id_usuario = s.id_asignador
	left join estatus d on d.id_estatus = s.estatus_id_estatus
	left join tareas e on e.id_tarea = s.tareas_id_tarea
	where proyectos_id_proyecto =$id";
    $base = new mysqlfunciones();
    $res = $base->ejecutar($qry);
    return $res;
    
}
public function detalleIdResponsable($id){
    $qry="select s.*, c.nombre_usr as responsable
    from detalle s 
    left join usuarios c on c.id_usuario = s.id_responsable
	where proyectos_id_proyecto=$id";
    $base = new mysqlfunciones();
    $res = $base->ejecutar($qry);
    return $res;
    
}



public function tareasGet(){
    $qry = 'SELECT t.*, u.nombre_usr as usuario
    FROM tareas t
    INNER JOIN usuarios u on t.usuarios_id_usuario=u.id_usuario';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}

public function usr(){
    $qry = 'SELECT u.*, r.nombre_rol FROM usuarios u LEFT JOIN roles r on u.roles_id_rol = r.id_rol ';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function tareasId($id){
    $qry = 'SELECT * FROM tareas
    WHERE id_tarea='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function rol(){
    $qry = 'SELECT * FROM roles';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function editUsr($id){
    $qry = 'SELECT * FROM usuarios 
    WHERE id_usuario='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}

public function editrol($id){
    $qry = 'SELECT * FROM roles 
    WHERE id_rol='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
 

}


?>