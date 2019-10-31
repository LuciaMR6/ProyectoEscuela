<?php
$idProfesor = $_POST['idProfesor'];
if ($idProfesor) {
        $mysqli = new mysqli('localhost', 'lucia','secreto', 'mydb');
        if ($mysqli->connect_errno){
            echo"lo sentimos, no se puede conectar con la base de datos";
            exit;
        }else {
            $sql = "DELETE FROM `profesores` WHERE `idProfesor`= $idProfesor;";
            if(!$resultado = $mysqli->query($sql)){
                echo "Error al guardar los datos\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            }else{
                echo " Los datos del profesor han sido eliminados del sistema." ;
            }
            $mysqli->close();
        }
}