<?php

namespace consultas_sql;
use funciones\mysqlfunciones;
 class consultas{
     
public function projectGet($id){
    $qry ='SELECT  DISTINCT proyectos_id_proyecto, d.nombre_proyecto FROM detalle 
    INNER JOIN proyectos d on id_proyecto = proyectos_id_proyecto
    where id_responsable='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function allProject(){
    $qry='SELECT * FROM proyectos';
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
public function detalleIdAsignador($id_p, $id_r){
    $qry="select s.*,  d.nombre_estatus as estatus, e.nombre_tarea as tarea, c.nombre_usr as asignador 
    from detalle s 
    left join usuarios c on c.id_usuario = s.id_asignador
	left join estatus d on d.id_estatus = s.estatus_id_estatus
	left join tareas e on e.id_tarea = s.tareas_id_tarea
	where proyectos_id_proyecto =$id_p AND id_responsable =$id_r";
    $base = new mysqlfunciones();
    $res = $base->ejecutar($qry);
    return $res;
    
}

public function detalleIdResponsable($id_p, $id_r){
    $qry="select s.*, c.nombre_usr as responsable
    from detalle s 
    left join usuarios c on c.id_usuario = s.id_responsable
	where proyectos_id_proyecto=$id_p and id_responsable =$id_r";
    $base = new mysqlfunciones();
    $res = $base->ejecutar($qry);
    return $res;
    
}


public function logsId($id){
    $qry = 'SELECT l.*, u.nombre_usr as nombre FROM logs l inner join usuarios u on l.responsable_log = u.id_usuario
    WHERE responsable_log='.$id;
     $rt = new mysqlfunciones;
     $res = $rt->ejecutar($qry);
     return $res;
}
public function logs(){
    $qry='SELECT l.*, u.nombre_usr as nombre FROM logs l inner join usuarios u on l.responsable_log = u.id_usuario';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
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
public function tareasIdusr($id){
    $qry = 'select s.*,  d.nombre_estatus as estatus, e.nombre_tarea as tarea, c.nombre_usr as asignador 
    from detalle s 
    left join usuarios c on c.id_usuario = s.id_asignador
    left join estatus d on d.id_estatus = s.estatus_id_estatus
    left join tareas e on e.id_tarea = s.tareas_id_tarea
    where id_responsable='.$id;
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
public function estatus(){
    $qry = 'select id_estatus
    from estatus
    where nombre_estatus="No iniciado" or "no iniciado"';
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
<<<<<<< HEAD


=======
public function estatus7(){
    $qry = 'SELECT id_estatus, nombre_estatus from estatus ';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function editEstatus($id){
    $qry = 'SELECT * FROM estatus 
    WHERE id_estatus='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}

public function allEstatus(){
    $qry = 'SELECT * FROM estatus';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
 
>>>>>>> marilu


}


?>