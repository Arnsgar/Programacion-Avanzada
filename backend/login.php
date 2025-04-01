<?php
session_start(); // Iniciar la sesión   
include "db.php"; // Incluir el archivo de conexión a la base de datos

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user=$_POST["user"];
    $password=$_POST["password"];

    // Verificar si el usuario existe en la base de datos
    $sql="SELECT * FROM profesores WHERE usuario=? LIMIT 1";
    // Preparar y ejecutar la consulta SQL
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$user]);
    $profesor=$stmt->fetch(PDO::FETCH_ASSOC);
    // Verificar si se encontró un usuario
    if($profesor){
        if ($password == $profesor["contraseña"]) {
        //if(password_verifi($password,$profesor["password"])){  solo usar si esta incriptada
            // Si la contraseña es correcta, iniciar sesión
            $_SESSION["user"]=$profesor["usuario"];
            $_SESSION["id"]=$profesor["id_profesor"];
            header("Location: ../Trabajo en Grupo- Proyecto/profesores.php"); // Redirigir a la página de inicio
            exit();
        } else {
            // Contraseña incorrecta
            echo "❌ Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "❌ Usuario no encontrado.";
    
    }
  

}
?>