<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escuela Fulanito</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">

  </head>
  <body>

    <div class="d-flex" id="wrapper">

      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><b>Opciones </b> </div>
        <div class="list-group list-group-flush">
          <a href="./FormularioAlumno.php" class="list-group-item list-group-item-action bg-light">Alumnos</a>
          <a href="./FormularioProfesor.php" class="list-group-item list-group-item-action bg-light">Profesores</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Inscripciones</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Cobros</a>
          <a class="nav-link dropdown-toggle list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#collapseOptions" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="collapse" id="collapseOptions">
              <div class="card card-body">
                <a href="#" class="list-group-item list-group-item-action bg-light">Inscripciones</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Inscripciones</a>
              </div>
            </div>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <button class="navbar-toggler" id="menu-toggle" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                </div>
              </li>
            </ul>
          </div>
        </nav>