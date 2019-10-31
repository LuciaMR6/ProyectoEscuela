<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="./datatables/datatables.min.css" />
    <script src="./jquery.js"></script>
    <script src="./datatables/datatables.min.js"></script>
</head>

<body>
    <table id="listado_profesor" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>CI</th>
                <th>Direccion</th>
                <th>Carga Horaria</th>
                <th>Telefono</th>
                <th></th>
            </tr>
        </thead>
    </table>

    <script>
        function editar_profesor(data) {
            window.location.href = './FormularioProfesor.php?idProfesor=' + data.id;
        }

        function borrar_profesor(data) {
            $.post("BorrarProfesor.php", {
                idProfesor: data.id
            },
            function(data) {
                alert(data);
                location.reload();
            });
            }

        $(document).ready(function(){
          var table=  $('#listado_profesor').dataTable({
            "ajax": "http://localhost/BuscarProfesor.php?idProfesor=0",
            "responsive": true,
            "columns": [{
                "data": "idProfesor",
                "className": "text-center"
            },
            {
                "data": "Nombre_profesor",
                "className": "text-center"
            },
            {
                "data": "Apellido_profesor",
                "className": "text-center"
            },
            {
                "data": "CIProfesor",
                "className": "text-center"
            },
            {
                "data": "Direccion_profesor",
                "className": "text-center"
            },
            {
                "data": "Carga_horaria",
                "className": "text-center"
            },
            {
                "data": "Telefono_profesor",
                "className": "text-center"
            },
            
            {
              "data": null,
              "render": function(data) {
                return "<button type='button' class='btn btn-primary' id=" + data.idProfesor + " onclick='editar_profesor(this)'>Editar</button>\
                <button type='button' class='btn btn-danger' id=" + data.idProfesor + " onclick='borrar_profesor(this)'>Borrar</button>"
              }  
            }
            ]
        });
        });
    </script>
<div>    <button type="button" class="btn btn-success" onclick="window.location.href = './FormularioProfesor.php'">Volver</button>
    </div>
</body>

</html>