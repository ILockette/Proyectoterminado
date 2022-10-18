<?php
session_start();
$conexion=new mysqli("localhost","root","","form_alumno");
$user=$_SESSION['username'];

if(!isset($user)){
    header("location:/Proyecto/login.php");
}

$materia=$_POST['materia'];
$alumno=$_POST['alumno'];
$calificacion=$_POST['calificacion'];

//consulta para dar alta

$sql="UPDATE calificaciones SET calificacion='$calificacion' where IDusuario_A='$alumno' and IDMateria='$materia' and IDusuario_P='$user'";
if($conexion->query($sql)===false){
    echo '<script>
    alert("Error al registrar calificación");
    window.location="/Proyecto/login.php";
    </script>';
}else Header("location: /Proyecto/calificar.php");

mysqli_close($conexion);