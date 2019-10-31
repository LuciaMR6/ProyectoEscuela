<?php
$idAlumno = $_POST['idAlumno'];
if ($idAlumno) {
        $mysqli = new mysqli('localhost', 'lucia','secreto', 'mydb');
        if ($mysqli->connect_errno){
            echo"lo sentimos, no se puede conectar con la base de datos";
            exit;
        }else {
            $sql = "DELETE FROM `alumnos` WHERE `idAlumno`= $idAlumno;";
            if(!$resultado = $mysqli->query($sql)){
                echo "Error al guardar los datos\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            }else{
                echo " Los datos del alumno han sido eliminados del sistema." ;
            }
            $mysqli->close();
        }
}