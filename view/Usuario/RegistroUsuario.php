<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRARSE</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
  </head>
  <body>
          <div class="form_registro">
            <h1>Registro</h1>
            <span > o <a href="LoginUsuario.php" >Ya tengo cuenta</a></span>

            <form action="ProcesoRegistroUsuario.php" method="POST" enctype='multipart/form-data'>
                <input name="nombre" type="text" placeholder="ingrese su nombre" required>
                <input name="dni" type="number" placeholder="ingrese su dni" required>
                <input name="clave" type="text" placeholder="ingrese su clave" required>
                <input type="submit" value="Registrarse">
                </br></br>
            </form>
          </div>
  </body>
</html>
