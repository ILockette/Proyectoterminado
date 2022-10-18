<?php
$user=$_SESSION['username'];
if(!isset($user)){
    header("location:/Proyecto/login.php");
}

$usuario="root";
$password="";
$servidor="localhost";
$basedatos="form_alumno";


//conexion a la bd
$conexion=new mysqli($servidor,$usuario,"",$basedatos) or die ("Error con el servidor de BD");
//buscar nombre del usuario
$consultauser=$conexion->query("SELECT*FROM alumno where IDusuario_A='$user'");
$fila=$consultauser->fetch_assoc();
$nombre_alumno=$fila['Nombre_A'];

//buscar en la base
$consulta="SELECT*FROM calificaciones where IDusuario_A='$user'";
$datos=$conexion->query($consulta);
if($datos->num_rows>0){
    $contador=0;
    while($fila=$datos->fetch_assoc()){
        $id=$contador+=1;
        //obtener nombre del profe a partir de id
        $profid=$fila['IDusuario_P'];
        $consultaprof=$conexion->query("SELECT*FROM profesor where IDusuario_P='$profid'");
        $fila_prof=$consultaprof->fetch_assoc();
        $nombre_prof=$fila_prof['Nombre_P'];
        //obtener nombre de materia a partir de id
        $materiaid=$fila['IDMateria'];
        $consultamat=$conexion->query("SELECT*FROM materia where IDMateria='$materiaid'");
        $fila_mat=$consultamat->fetch_assoc();
        $nombre_mat=$fila_mat['NombreMat'];

        //obtener calificacion
        $calificacion=$fila['calificacion'];
?>
        
        <tr>
            <td><?=$id?></td>
            <td><?=$nombre_alumno?></td>
            <td><?=$nombre_mat?></td>
            <td><?=$calificacion?></td>
            <td><?=$nombre_prof?></td>
        </tr>
<?php
    }
}

mysqli_close($conexion);