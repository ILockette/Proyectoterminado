<?php
$usuario="root";
$password="";
$servidor="localhost";
$basedatos="form_alumno";
$conexion=new mysqli($servidor,$usuario,"",$basedatos) or die ("Error con el servidor de BD");
//$bd=mysqli_select_db($conexion,$basededatos) or die("Error de conexion a la BD");

$nombre=$_POST['nombre'];
$apellidopaterno=$_POST['apellidoP'];
$apellidomaterno=$_POST['apellidoM'];
$user=$_POST['user'];
$pass=$_POST['password'];

$sql="INSERT INTO alumno VALUES('$user','$pass','$apellidopaterno','$apellidomaterno','$nombre')";
//$ejecutar=mysql_query($conexion,$sql);
if($conexion->query($sql)===false){
    echo "Error";
}Header("location: /Proyecto/login.php");
mysqli_close($conexion);

?>