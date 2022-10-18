<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN</title>
        <link rel="stylesheet" href="/Proyecto/css/estiloslog.css">
    </head>
    <body>
        <div class="formulario">
            <img src="/Proyecto/imagenes/usuario.png">
            <h1>Inicio de sesión</h1>
            <form action="/Proyecto/validar.php" method="post">
                <div class="usuario">
                    <input type="text" name="usuario" required>
                    <label>Nombre de usuario</label>
                </div>
                <div class="contrasena">
                    <input type="password" name="password" required>
                    <label>Contraseña</label>
                </div>
                <!--<div class="recordar">¿Has olvidado tu contraseña?</div>-->
                <!--boton <p><a class href >nomb boton</a></p>-->
                <input type="submit" value="Iniciar">
                <!--<button class="button"><a class="a" href="index.html">Iniciar</a></button>-->
                <div class="Registrarse">
                    ¿No tienes una cuenta? <a href="/Proyecto/registro.php">Registrate</a>
                </div>
            </form>
          </div>
    </body>
</html>
