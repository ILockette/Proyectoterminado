<?php
session_start();
$materia;
$alumno;
$conexion=new mysqli("localhost","root","","form_alumno");
$user=$_SESSION['username'];
if(!isset($user)){
    header("location:/Proyecto/login.php");
}

//consulta las materias
    $materias = $conexion->query("SELECT*FROM materia");

//consulta alumnos
    $alumnos = $conexion->query("SELECT*FROM alumno");
//consulta las materias
    $materias2 = $conexion->query("SELECT*FROM materia where IDusuario_P='$user'");

//consulta las materias
    $alumnos2 = $conexion->query("SELECT*FROM alumno");
    
    mysqli_close($conexion);
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
                            <li><a href="/Proyecto/ayuda_prof.php" class="select">Ayuda</a></li>
                    </nav>
                </div>
            </div>
        </header>
        
        <div class="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="panel">
                            <h3>Registro de calificaciones</h3>
                            <form method="post" class="form" action="/Proyecto/registro_calificacion.php">
                                <br><br>
                                <label>Seleccione la Materia</label><br>
                                <select name="materia" required> 
                                <option value="">Seleccione</option>
                                <?php 
                                    while($materia = $materias->fetch_assoc()){
                                        echo '<option value="'.$materia['IDMateria'].'">'.$materia['NombreMat'].'</option>';
                                    }
                                ?>
                                </select>
                                <br><br>
                                <label>Seleccione el alumno</label><br>
                                <select name="alumno" required>  
                                <option value="">Seleccione</option>
                                <?php 
                                    while($alumno = $alumnos->fetch_assoc()){
                                        echo '<option value="'.$alumno['IDusuario_A'].'">'.$alumno['Nombre_A']." ".$alumno['ApellidoP_A']." ".$alumno['ApellidoM_A'].'</option>';
                                    }
                                ?>
                                </select>
                                <br><br>
                                <label>Ingrese la calificación</label><br>
                                <input type="text" name="calificacion" Placeholder="Calificación" required>
                                </select>
                                <br><br>
                                <button type="submit" name="revisar" value="1">Enviar Calificación</button>
                                <br><br>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="panel">
                            <h3>Alta de materia</h3>
                            <form method="post" class="form" action="/Proyecto/alta_materia.php">
                                <br><br>
                                <label>Ingresa Nombre</label><br>
                                <input type="text" name="NombreMateria" Placeholder="Nombre de la materia" required>
                                <br><br>
                                <button type="submit" name="revisar" value="1">Enviar Alta</button>
                                <br><br>
                            </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_all">
            <div class="cover">
                <div class="container_cover">
                    <div class="panel">
                            <h3>Modificar calificacion</h3>
                            <form method="post" class="form" action="modificar_calificacion.php">
                                <br><br>
                                <label>Seleccione la Materia</label><br>
                                <select name="materia" required> 
                                <option value="">Seleccione</option>
                                <?php 
                                    while($materia = $materias2->fetch_assoc()){
                                        echo '<option value="'.$materia['IDMateria'].'">'.$materia['NombreMat'].'</option>';
                                    }
                                ?>
                                </select>
                                <br><br>
                                <label>Seleccione el alumno</label><br>
                                <select name="alumno" required>
                                <option value="">Seleccione</option>
                                <?php 
                                    while($alumno = $alumnos2->fetch_assoc()){
                                        echo '<option value="'.$alumno['IDusuario_A'].'">'.$alumno['Nombre_A']." ".$alumno['ApellidoP_A']." ".$alumno['ApellidoM_A'].'</option>';
                                    }
                                ?>
                                </select>
                                <br><br>
                                <label>Ingresa la nueva calificacion</label><br>
                                <input type="text" name="calificacion" Placeholder="Nueva calificación" required>
                                <br><br>
                                <button type="submit" name="revisar" value="1">Actualizar</button>
                                <br><br>
                            </form>
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
                    <h1>Paola Estrada</h1>
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
