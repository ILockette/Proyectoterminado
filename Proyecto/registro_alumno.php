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
            <h1>Registro Alumno</h1>
            <form action="/Proyecto/registroA.php" method="post">
                <div class="entrada">
                    <input name="nombre" type="text" required>
                    <label>Nombre</label>
                </div>
                <div class="entrada">
                    <input name="apellidoP" type="text" required>
                    <label>Apellido Paterno</label>
                </div>
                <div class="entrada">
                    <input name="apellidoM" type="text" required>
                    <label>Apellido Materno</label>
                </div>
                <div class="entrada">
                    <input name="user" type="text" required>
                    <label>Nombre de usuario</label>
                </div>
                <div class="entrada">
                    <input name="password" type="password" required>
                    <label>Contraseña</label>
                </div>
                <button class="button">Registrar</button>
            </form>
          </div>
    </body>
</html>