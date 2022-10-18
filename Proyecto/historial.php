<?php
$apellidoM;
$apellidoP;
session_start();
$user=$_SESSION['username'];
if(!isset($user)){
    header("location:/Proyecto/login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
        <link rel="stylesheet" href="/Proyecto/css/estilos.css">
        <script src="https://kit.fontawesome.com/aa88a67c00.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="container_header">
                <div class="logo">
                    <img src="/Proyecto/imagenes/conocimiento.png">
                </div>
                <div class="container_nav">
                    <nav class>
                        <ul>
                            <li><a href="principal_alumno.php" class="select">Inicio</a></li>
                            <li><a href="calificaciones.php" class="select">Calificaciones</a></li>
                            <li><a href="historial.php" class="select">Historial Académico</a></li>
                            <li><a href="perfil_alumno.php" class="select">Perfil</a></li>
                            <li><a href="/Proyecto/ayuda.php" class="select">Ayuda</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="cointaner_info">
                        <h1>Hola!</h1>
                        <h2>
                            <script type="text/javascript">
                            var d=new Date();
                            var hora=d.getHours();
                            if(hora>=0&&hora<12){
                                document.write('Buenos Dias');
                            } else if(hora>=12&&hora<19){
                                document.write('Buenas Tardes');
                            } else{
                                document.write('Buenas noches');
                            }
                        </script>
                        </h2>
                        <p>Revisa tus materias.</p>
                    </div>
                    <div class="container_vector">
                        <img src="/Proyecto/imagenes/alumno.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="cointaner_info">
                        <h3>Historial</h3>
                        <table class="content-table" >
                            <thead>
                                <tr >
                                <th scope="col">#</th>
                                <th scope="col">Materia</th>
                                <th scope="col">Profesor</th>
                                <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                               <?php require_once 'hist_alumno.php'?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <footer>
            <div class="container_footer">
                <div class="box_footer">
                    <div class="logo">
                        <img src="/Proyecto/imagenes/conocimiento.png" alt="">
                    </div>
                        <div class="terminos">
                            <p>Este proyecto fue hecho con terminos academicos</p>
                        </div>
                </div>
                <div class="box_footer">
                    <h2>Nuestro equipo</h2>
                    <h1>José Tapia</h1>
                    <h1>Ioana Eslava</h1>
                    <h1>Moisés García</h1>
                    <h1>Yael Luna</h1>
                    <h1>Karina Escamilla</h1>
                    <h1>Rubí Martinez</h1>
                </div>
                <div class="box_footer">
                    <h2>Tecnologías utilizadas</h2>
                    <h1>HTML</h1>
                    <h1>CSS</h1>
                    <h1>MYSQL</h1>
                </div>
                <div class="box_footer">
                    <h2>Nuestras redes</h2>
                    <a href="https://www.facebook.com/radioimpo"><i class="fa-brands fa-facebook"></i>Facebook</a>
                    <a href="https://www.facebook.com/radioimpo"><i class="fa-brands fa-youtube"></i>Youtube</a>
                    <a href="https://instagram.com/radioimpo?igshid=YmMyMTA2M2Y"><i class="fa-brands fa-instagram"></i>Instragram</a>

                </div>
            </div>
        </footer>
    </body>
</html>