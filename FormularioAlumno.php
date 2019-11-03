<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<title></title>
<meta name= "viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" mdeia="screen" href="css/bootstrap.css">
    
<head>

<body>
<div class="wrapper">
    
</div>
<h1>Alumno</h1>
<?php
    if(isset($_GET["idAlumno"])) {
        $idAlumno =  $_GET["idAlumno"];
        $mysqli = new mysqli('localhost', 'lucia', 'secreto', 'mydb');
        if ($mysqli->connect_errno) {
            echo "Lo sentimos, no se puede conectar con la base de datos";
            exit;
        } else {
            $sql = "SELECT * FROM alumnos WHERE idAlumno = $idAlumno";
            $result = $mysqli->query($sql);
            $row = mysqli_fetch_assoc($result);
            $nombre_alumno =$row['nombre_alumno'];
            $apellido_alumno = $row['apellido_alumno'];
            $edad_alumno = $row['edad_alumno'];
            $genero_alumno = $row['genero_alumno'];
            $Det_fichamedica = $row['Det_fichamedica'];
            $Direccion_alumno = $row['Direccion_alumno'];
            $Telefono= $row['Telefono'];
            $CI_alumno = $row['CI_alumno'];
            $encargado = $row['encargado'];
        }
    };
?>

<div class="container">
<form name="FormularioAlumno" action="guardar_alumno.php" method="POST">
<?php
                if(isset($_GET["idAlumno"])) {
                    echo '<input type="hidden" class="form-control" name="idAlumno" value="'.$_GET["idAlumno"].'">';
                }
            ?>
   <!-- <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="codigo"><p>Codigo</p></label>
                <//?php
                            // if(isset($_GET["idAlumno"]) and $idAlumno) {
                            //     echo '<input type="number" class="form-control" name="" value="'.$idAlumno. '">';
                            // } else {
                            //     echo '<input type="number" class="form-control" name="idAlumno">';
                            // }
                        ?>
            </div>
        </div>
    </div> -->

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="nombre_alumno"><p>Nombre</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $nombre_alumno) {
                                echo '<input type="varchar" class="form-control" name="nombre_alumno" value="' .$nombre_alumno. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="nombre_alumno">';
                            }
                        ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="apellido_alumno"><p>Apellido</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $apellido_alumno) {
                                echo '<input type="varchar" class="form-control" name="apellido_alumno" value="' .$apellido_alumno. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="apellido_alumno">';
                            }
                        ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="edad_alumno"><p>EDAD</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $edad_alumno) {
                                echo '<input type="number" class="form-control" name="" value="'.$edad_alumno. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="edad_alumno">';
                            }
                        ?>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-4">
            <label for="genero_alumno"><p>Genero</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $genero_alumno) {
                                echo '<input type="varchar" class="form-control" name="" value="'.$genero_alumno. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="genero_alumno">';
                            }
                        ?>          
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Det_fichamedica"><p> Detalles Ficha Medica</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $Det_fichamedica) {
                                echo '<input type="varchar" class="form-control" name="proceso" value="' .$Det_fichamedica. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="Det_fichamedica">';
                            }
                        ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Direccion_alumno"><p>Direccion</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $Direccion_alumno) {
                                echo '<input type="varchar" class="form-control" name="Direccion_alumno" value="' .$Direccion_alumno. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="Direccion_alumno">';
                            }
                        ?>
            </div>
        </div>
    </div><div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Telefono"><p>Telefono</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $Telefono) {
                                echo '<input type="number" class="form-control" name="Telefono" value="' .$Telefono. '">';
                            } else {
                                echo '<input type="numberr" class="form-control" name="Telefono">';
                            }
                        ?>
            </div>
        </div>
    </div>
    
    
  

    <div class="form-group">
        <div class="row">
            <div class="col-4">
            <label for="CI_alumno"><p>C.I</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $CI_alumno) {
                                echo '<input type="number" class="form-control" name="tiempo" value="' .$CI_alumno. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="CI_alumno">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
            <label for="encargado"><p>Encargado</p></label>
                <?php
                            if(isset($_GET["idAlumno"]) and $encargado) {
                                echo '<input type="varchar" class="form-control" name="encargado" value="' .$encargado. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="encargado">';
                            }
                        ?>
            </div>
        </div>
    </div>


                <button type="submit" class="btn btn-primary">GUARDAR</button>
                <button type="reset" class="btn btn-danger">CANCELAR</button>
             <button type="button" class="btn btn-success" onclick="window.location.href = './listadoAlumno.php'">REGISTROS</button>
      </form>
    </div>
</body>

</html>
