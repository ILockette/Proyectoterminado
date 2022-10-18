<?php
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
        <title>Adm. Escolar</title>
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
                            <li><a href="/Proyecto/principal_prof.php" class="select">Inicio</a></li>
                            <li><a href="/Proyecto/calificar.php" class="select">Calificar</a></li>
                            <li><a href="/Proyecto/grupos.php" class="select">Grupos</a></li>
                            <li><a href="/Proyecto/perfil_prof.php" class="select">Perfil</a></li>
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
                        <h2>¿Necesitas Ayuda?</h2>
                        <h3>Contactanos!</h3>
                        <p>Informa si tienes algun problema con la plataforma</p>
                    </div>
                    <div class="container_vector">
                        <img src="/Proyecto/imagenes/ayuda.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container_all2">
            <div class="cover">
                <div class="container_cover2">
                    <div class="form_contact">
                        <div class="Header_icon">
                            <img class="icon" src="/Proyecto/imagenes/email.png">
                            <h1>Envianos un correo</h1>
                        </div>
                        <form class="contact" action="https://formsubmit.co/isabelmontesinos070@gmail.com" method="POST">
                            <label>Nombre: </label>
                            <input type="text" name="name"></br>
                            <label>Email: </label>
                            <input type="email" name="email"></br>
                            <label>Mensaje: </label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea></br>
                            <button type="submit">Enviar</button>
                        </form> 
                    </div>
                    <div class="contact_info">
                        <h1>Información de contacto</h1>
                            <h2>55-38439075</h2>
                            <h2>paolaestradaolvera@gmail.com</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.1453575087244!2d-99.14276384929919!3d19.49238108678586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9d1b33603ad%3A0x4c5db956229e013b!2sIMPo%20Instituto%20Mexicano%20de%20Psicooncolog%C3%ADa%20Plantel%202!5e0!3m2!1ses-419!2smx!4v1665447782088!5m2!1ses-419!2smx" width="485" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
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