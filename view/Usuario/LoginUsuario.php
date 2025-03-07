<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
  </head>
  <body>
    <div class="cajadelogeo" name="cajadelogeo">
      <h1 style="">Iniciar Sesion</h1>
      <span style="" >o <a href="RegistroUsuario.php" style="">Registrarse</a></span>
      </br></br></br>
      <form action="ValidarUsuario.php" method="POST" class="formulario_inicio">
        <div class="input-container"><i class="fas fa-id-card"></i>
         <input name="dni" type="number" placeholder="Ingrese su dni" required>
        </div>
        <div class="input-container"><i class="fas fa-lock"></i>
          <input name="clave" type="text" placeholder="Ingrese su clave" required> 
        </div>
        <input type="submit" value="INICIAR" class="btnIni">
      </form>
    </div>
     <h1></h1> 
  </body>
</html>
