<?php
session_start();
$usuario="root";
$nombre;
$password="";
$servidor="localhost";
$basedatos="form_alumno";
$user=$_SESSION['username'];

$nombremat=$_POST['NombreMateria'];

//conexion a la bd
$conexion=new mysqli($servidor,$usuario,"",$basedatos) or die ("Error con el servidor de BD");
echo "ok";
//consulta para dar alta
$sql="INSERT INTO materia VALUES('','$nombremat','$user')";
if($conexion->query($sql)===false){
    echo '<script>
    alert("Error al registrar materia");
    window.location="/Proyecto/login.php";
    </script>';
    
}else Header("location: /Proyecto/calificar.php");

mysqli_close($conexion);