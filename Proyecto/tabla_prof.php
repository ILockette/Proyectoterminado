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
$consultauser=$conexion->query("SELECT*FROM profesor where IDusuario_P='$user'");
$fila=$consultauser->fetch_assoc();
$nombre_prof=$fila['Nombre_P'];

//buscar en la base
$consulta="SELECT*FROM calificaciones where IDusuario_P='$user'";
$datos=$conexion->query($consulta);
if($datos->num_rows>0){
    $contador=0;
    while($fila=$datos->fetch_assoc()){
        $id=$contador+=1;
        //obtener nombre de alumno a partir de id
        $alumnoid=$fila['IDusuario_A'];
        $consultaalumno=$conexion->query("SELECT*FROM alumno where IDusuario_A='$alumnoid'");
        $fila_alumno=$consultaalumno->fetch_assoc();
        $nombre_alumno=$fila_alumno['Nombre_A'];
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