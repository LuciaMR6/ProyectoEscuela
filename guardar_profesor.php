<head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title></title>
        <meta mane="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
            <style>
                body {
                    background: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
            linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);

                    }
            
                p{
                color: black;
                }
            
            </style>
            
            
    </head>
<?php
/* Metodo Get - Se utiliza para guardar informacion*/
              
                $Nombre_profesor= $_POST['Nombre_profesor'];
                $Apellido_profesor= $_POST['Apellido_profesor'];
                $CIProfesor= $_POST['CIProfesor'];
                $Direccion_profesor= $_POST['Direccion_profesor'];
                $Carga_horaria= $_POST['Carga_horaria'];
                $Telefono_profesor = $_POST['Telefono_profesor'];
               


// Esto es una constante
define("boton_atras","<input type='button' value='Volver Al Formulario' onclick='history.back()'>");
if ( $Nombre_profesor and $Apellido_profesor and $CIProfesor and $Direccion_profesor and $Carga_horaria and $Telefono_profesor){
    $mysqli = new mysqli('localhost','lucia','secreto','mydb');
    if($mysqli->connect_errno){
        echo"LO SENTIMOS, NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
        exit;
    }else{
        if (isset($_POST["idProfesor"]) && !empty($_POST["idProfesor"])){
            $idProfesor=$_POST["idProfesor"];
        $sql = "UPDATE `profesores` SET `Nombre_profesor` = '$Nombre_profesor', `Apellido_profesor`= '$Apellido_profesor',`CIProfesor`= '$CIProfesor' ,  `Direccion_profesor`='$Direccion_profesor', `Carga_horaria`='$Carga_horaria', `Telefono_profesor`='$Telefono_profesor',  WHERE `idProfesor`='$idProfesor;'";
        if (!$resultado = $mysqli->query($sql)){
            echo "Error al guardar los datos\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Errno: " . $mysqli->error . "\n"; 
        }else{
            echo "<z>Actualizado correctamente!</z>"; 
        }
    }else{
        $sql = "INSERT INTO `profesores` ( `Nombre_profesor`, `Apellido_profesor`,`CIProfesor`, `Direccion_profesor`, `Carga_horaria`, `Telefono_profesor`)
        VALUES ('$Nombre_profesor','$Apellido_profesor','$CIProfesor','$Direccion_profesor',$Carga_horaria, '$Telefono_profesor');";
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
  
    print("<a href='http://localhost/FormularioProfesor.php'>Ir al inicio</a>");
//Verificar si todos los campos estan vacios
} elseif (empty($Nombre_profesor) and empty($Apellido_profesor) and empty($CIProfesor) and empty($Direcion_profesor) and empty($Carga_horaria) and empty($Telefono_profesor) ) {
    print("<p>No se quien eres!</p>");
    print(boton_atras);

}elseif(empty($Nombre_profesor)) {
    print("<p> DEBES DE INGRESAR EL Nombre</p>");
    print(boton_atras);
}elseif(empty($Apellido_apellido)) {
    print("<p> DEBES DE INGRESAR EL APELLIDO</p>");
    print(boton_atras);
}else if(empty($CIProfessor)) {
    print("<p> DEBES DE INGRESAR LA EDAD</p>");
    print(boton_atras);
}elseif(empty($Direccion_professor)) { 
    print("<p> DEBES DE INGRESAR UNA Direccion</P>");
    print(boton_atras);
}elseif(empty($Carga_horaria)) { 
    print("<p> DEBES DE INGRESAR EL CI DEL ALUMNO</P>");
    print(boton_atras);
}elseif(empty($Telefono_profesor)) { 
    print("<p> INGRESE EL NOMBRE DEL ENCARGADO</P>");
    print(boton_atras);
}