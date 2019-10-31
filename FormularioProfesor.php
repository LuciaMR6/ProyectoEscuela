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
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioAlumno.php">Alumnos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="FormularioProfesor.php">Profesores<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inscripción</a>
      </li>
    </ul>
  </div>
</nav>
<h1>Profesor</h1>
<?php
        if(isset($_GET["idProfesor"])) {
            $idProfesor =  $_GET["idProfesor"];
            $mysqli = new mysqli('localhost', 'lucia', 'secreto', 'mydb');
            if ($mysqli->connect_errno) {
                echo "Lo sentimos, no se puede conectar con la base de datos";
                exit;
            } else {
                $sql = "SELECT * FROM profesores WHERE idProfesor = $idProfesor";
                $result = $mysqli->query($sql);
                $row = mysqli_fetch_assoc($result);
                $Nombre_profesor =$row['Nombre_profesor'];
                $Apellido_profesor = $row['Apellido_profesor'];
                $CIProfesor = $row['CIProfesor'];
                $Direccion_profesor = $row['Direccion_profesor'];
                $Carga_horaria = $row['Carga_horaria'];
                $Telefono_profesor = $row['Telefono_profesor'];
                
            }
        };
    ?>

<div class="container">
<form name="FormularioProfesor" action="guardar_profesor.php" method="POST">
<?php
                if(isset($_GET["idProfesor"])) {
                    echo '<input type="hidden" class="form-control" name="idProfesor" value="'.$_GET["idProfesor"].'">';
                }
            ?>
  

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Nombre_profesor"><p>Nombre</p></label>
                <?php
                            if(isset($_GET["idProfesor"]) and $Nombre_profesor) {
                                echo '<input type="varchar" class="form-control" name="Nombre_profesor" value="' .$Nombre_profesor. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="Nombre_profesor">';
                            }
                        ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Apellido_profesor"><p>Apellido</p></label>
                <?php
                            if(isset($_GET["idProfesor"]) and $Apellido_profesor) {
                                echo '<input type="varchar" class="form-control" name="Apellido_profesor" value="' .$Apellido_profesor. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="Apellido_profesor">';
                            }
                        ?>
            </div>
        </div>
    </div>
    
    
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="CIProfesor"><p>C.I</p></label>
                <?php
                            if(isset($_GET["idProfesor"]) and $CIProfesor) {
                                echo '<input type="number" class="form-control" name="proceso" value="' .$CIProfesor. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="CIProfesor">';
                            }
                        ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Direccion_profesor"><p>Direccion</p></label>
                <?php
                            if(isset($_GET["idProfesor"]) and $Direccion_profesor) {
                                echo '<input type="varchar" class="form-control" name="Direccion_profesor" value="' .$Direccion_profesor. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" name="Direccion_profesor">';
                            }
                        ?>
            </div>
        </div>
    </div>
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="Carga_horaria"><p>Carga Horaria</p></label>
                    <?php
                            if(isset($_GET["idProfesor"]) and $Carga_horaria) {
                                echo '<input type="number" class="form-control" name="Carga_horaria" value="' .$Carga_horaria. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="Carga_horaria">';
                            }
                        ?>
                </div>
            </div>
     </div>
    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Telefono_profesor"><p>Telefono</p></label>
                <?php
                            if(isset($_GET["idProfesor"]) and $Telefono_profesor) {
                                echo '<input type="number" class="form-control" name="Telefono_profesor" value="' .$Telefono_profesor. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="Telefono_profesor">';
                            }
                        ?>
            </div>
        </div>
    </div>
    
    
  

    


                <button type="submit" class="btn btn-primary">GUARDAR</button>
                <button type="reset" class="btn btn-danger">CANCELAR</button>
                <button type="button" class="btn btn-success" onclick="window.location.href = './listadoProfesores.php'">REGISTROS</button>
      </form>
    </div>
</body>

</html>
