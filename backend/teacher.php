<?php
include 'db.php';

//registro de profesores
function registrarProfesor($nombre_institucion,$nombres,$apellidos,$tipo_identificacion,$numero_identificacion,$telefono,$correo,$facultad,$usuario,$contraseña,$id_profesor,$fecha_registro){
    global $pdo;
    $hash = password_hash($contraseña, PASSWORD_BCRYPT);
    $sql="INSERT INTO profesores (nombre_institucion,nombres,apellidos,tipo_identificacion,numero_identificacion,telefono,correo,facultad,usuario,contraseña,id_profesor,fecha_registro) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt=$pdo->prepare($sql);
    return $stmt->execute ([$nombre_institucion,$nombres,$apellidos,$tipo_identificacion,$numero_identificacion,$telefono,$correo,$facultad,$usuario,$hash,$id_profesor,$fecha_registro]);
}

?>

