<?php

/* METODO GET - se utiliza para obtener un dato */

$idAlumno = $_GET['idAlumno'];
$mysqli = new mysqli('localhost', 'lucia','secreto', 'mydb');
// Esto es para que nos avise si se pudo o no conectar con la base de datos
if ($mysqli->connect_errno) {
    echo "Lo sentimos, no se puede conectar con la base de datos";
    exit;
} else {
    //Para seleccionar por idCliente en la busqueda
    $sql = "SELECT * FROM alumnos WHERE idAlumno = $idAlumno";
    if ($idAlumno == 0) {
        $sql = "SELECT * FROM alumnos;";
    }
    $result = $mysqli->query($sql);
//Aqui aparecen los resultados en un json cutre'i 
    $resultados['data'] = array();
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            array_push($resultados['data'], $row);
        }
        header('Content-type: application/json');
        echo json_encode( $resultados);
    } else {
        $rows = [];
        header('Content-type: application/json');
        echo json_encode( $resultados );
    }
    $mysqli->close();
}