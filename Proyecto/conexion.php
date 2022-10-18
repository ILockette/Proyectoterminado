<?php
include("configurarion.php");
//conexion a la Base de datos
$conexion=new mysqli($servidor,$usuario,"",$basedatos) or die ("Error con el servidor de BD");

if(mysqli_connect_errno()){
    echo "No conectado", mysqli_connect_error();
    exit();
}else{
    echo 'Conectado';
}