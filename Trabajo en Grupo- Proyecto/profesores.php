<?php
session_start();  // Iniciar la sesión

// Verificar si el usuario está logueado
$user=$_SESSION["user"] ?? null; // Obtener el usuario de la sesión, o null si no está logueado
if (!isset($user)) {
    header("Location: ../Trabajo en Grupo- Proyecto/index.html");  // Si no está logueado, redirigir al login
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/stylep.css"> -->


    <title>Document</title>
</head>
<body>
    <h1>Hola here i go again</h1>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Bienvenido</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center">¡Hola, <?php echo $_SESSION['user']; ?>!</h5>
                        <p class="text-center">¡Estás logueado correctamente!</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






<!-- Footer: Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
    
</body>
</html>