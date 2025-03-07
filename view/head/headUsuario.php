  <?php
    session_start();   
    $file = 'temp_data.json';
    if(file_exists($file) or !empty($_SESSION['user']) ):
     if(!empty($_SESSION['user'])){
      $datos=$_SESSION['user'];           
     }else{
      $_SESSION['user']=json_decode(file_get_contents('temp_data.json'), true);
      $datos=$_SESSION['user'];
      // Eliminamos el archivo temporal para evitar reutilización
      unlink('temp_data.json');
     }
  ?>
  <!doctype html>
    <html lang="es">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      </head>
      <body>
        <div class="container-fluid bg-dark p-2 mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h1 style="color:white;"><?php echo  $datos['nombre']; ?></h1>  
            <a href="cerrarUsuario.php">Cerrar Session</a>          
        </nav>
        </div>
    <div class="container-fluid">
       <?php else:  
        header("Location: LoginUsuario.php");
       endif; ?>
