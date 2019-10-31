<head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title></title>
        <meta mane="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
            <style>
                body {
                    background: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%);
            linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);

                    }
            
                p{
                color: black;                                                                                                                                                                                                                                                                           
                }
            
            </style>
            
            
</head>
<?php
/* Metodo POST - Se utiliza para guardar informacion*/
    $nombre_alumno= $_POST['nombre_alumno'];
    $apellido_alumno= $_POST['apellido_alumno'];
    $edad_alumno= $_POST['edad_alumno'];
    $genero_alumno= $_POST['genero_alumno'];
    $Det_fichamedica = $_POST['Det_fichamedica'];
    $Direccion_alumno= $_POST['Direccion_alumno'];
    $Telefono = $_POST['Telefono'];
    $CI_alumno = $_POST['CI_alumno'];
    $encargado = $_POST['encargado'];
?>

 <!--Esto es una constante-->

<?php
define("boton_atras","<input type='button' value='Volver Al Formulario' onclick='history.back()'>");
if ( $nombre_alumno and $apellido_alumno and $edad_alumno and $genero_alumno and $Det_fichamedica and $Direccion_alumno and $Telefono and $CI_alumno and $encargado){
    $mysqli = new mysqli('localhost','lucia','secreto','mydb');
    if($mysqli->connect_errno){
        echo"LO SENTIMOS, NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
        exit;
    }else{
        if (isset($_POST["idAlumno"]) && !empty($_POST["idAlumno"])){
            $idAlumno=$_POST["idAlumno"];
        $sql = "UPDATE `alumnos` SET `nombre_alumno`='$nombre_alumno',`apellido_alumno`='$apellido_alumno',`edad_alumno`='$edad_alumno',`genero_alumno`='$genero_alumno',`CI_alumno`='$CI_alumno',`Det_fichamedica`='$Det_fichamedica',`Telefono`='$Telefono',`Direccion_alumno`='$Direccion_alumno',`encargado`='$encargado' WHERE `idAlumno`='$idAlumno;'";
        if (!$resultado = $mysqli->query($sql)){
            echo "Error al guardar los datos\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Errno: " . $mysqli->error . "\n"; 
        }else{
            echo "<z>Actualizado correctamente!</z>"; 
        }
    }else{
        $sql = "INSERT INTO `alumnos` ( `nombre_alumno`, `apellido_alumno`,`edad_alumno`,`genero_alumno`, `Det_fichamedica`, `Telefono`, `CI_alumno`, `Direccion_alumno`, `encargado`)
        VALUES ('$nombre_alumno', '$apellido_alumno',$edad_alumno,'$genero_alumno','$Det_fichamedica','$Telefono',$CI_alumno, '$Direccion_alumno','$encargado');";
        if (!$resultado = $mysqli->query($sql)){
            echo "Error al guardar los datos\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Errno: " . $mysqli->error . "\n"; 
        }else{
            echo "<z>Guardado Correctamente!</z>";
        }
        }
        $mysqli->close();
    }
  
    print("<a href='http://localhost/FormularioAlumno.php'>Ir al inicio</a>");
?>

<!--Verificar si todos los campos estan vacios-->

<?php
} elseif (empty($nombre_alumno) and empty($apellido_alumno) and empty($edad_alumno)and empty($genero_alumno) and empty($Det_fichamedica) and empty($Telefono) and empty($Direccion_alumno) and empty($CI_alumno) and empty($encargado)) {
    print("<p>No se quien eres!</p>");
    print(boton_atras);
}elseif(empty($nombre_alumno)) {
    print("<p> DEBES DE INGRESAR EL NOMBRE</p>");
    print(boton_atras);
}elseif(empty($apellido_alumno)) {
    print("<p> DEBES DE INGRESAR EL APELLIDO</p>");
    print(boton_atras);
}else if(empty($edad_alumno)) {
    print("<p> DEBES DE INGRESAR LA EDAD</p>");
    print(boton_atras);
}else if(empty($genero_alumno)) {
    print("<p> DEBES DE INGRESAR EL GENERO</p>");
    print(boton_atras);
}elseif(empty($Det_fichamedica)) {
    print("<p> DEBES DE INGRESAR LA FICHA MEDICA</p>");
    print(boton_atras);  
}elseif(empty($Telefono)) { 
    print("<p> DEBES DE INGRESAR EL NUMERO Telefono</P>");
    print(boton_atras);
}elseif(empty($Direccion_alumno)) { 
    print("<p> DEBES DE INGRESAR UNA Direccion</P>");
    print(boton_atras);
}elseif(empty($CI_alumno)) { 
    print("<p> DEBES DE INGRESAR EL CI DEL ALUMNO</P>");
    print(boton_atras);
}elseif(empty($encargado)) { 
    print("<p> INGRESE EL NOMBRE DEL ENCARGADO</P>");
    print(boton_atras);
}
?>