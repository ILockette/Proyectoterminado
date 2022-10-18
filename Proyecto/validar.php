<?php
$usuario="root";
$nombre;
$password="";
$servidor="localhost";
$basedatos="form_alumno";

$user=$_POST['usuario'];
$pass=$_POST['password'];

//conexion a la bd
$conexion=new mysqli($servidor,$usuario,"",$basedatos) or die ("Error con el servidor de BD");
echo "ok";
//buscar en alumnos
$validar="SELECT*FROM alumno WHERE IDusuario_A='$user' and password_A='$pass'";
$resultado=$conexion->query($validar);
//buscar en profesores
$validarp="SELECT*FROM profesor WHERE IDusuario_P='$user' and password_P='$pass'";
$resultadoP=$conexion->query($validarp);

if($resultado->num_rows>0){
    /*$consulta="SELECT Nombre_A FROM alumno WHERE IDusuario_A='$user'";
    $resultadon=$conexion->query($consulta);
    $fila=$resultado->fetch_row();
    $nombre=$fila[4];*/
    session_start();
    $_SESSION['username']=$user;
    Header("location: /Proyecto/principal_alumno.php");
    exit;
}elseif($resultadoP->num_rows>0){
    /*$consulta="SELECT Nombre_P FROM profesor WHERE IDusuario_P='$user'";
    $resultadon=$conexion->query($consulta);
    $fila=$resultado->fetch_row();
    $nombre=$fila[4];*/
    session_start();
    $_SESSION['username']=$user;
    Header("location: /Proyecto/principal_prof.php");
    exit;
}else{echo '<script>
            alert("Usuario no existe, verifique los datos introducidos");
            window.location="/Proyecto/login.php";
            </script>';
            exit;
}
mysqli_free_result($resultado);
mysqli_free_result($resultadoP);
mysqli_free_result($resultadon);
mysqli_close($conexion);