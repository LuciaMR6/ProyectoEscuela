<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="./datatables/datatables.min.css" />
    <script src="./jquery.js"></script>
    <script src="./datatables/datatables.min.js"></script>
</head>

<body>
    <table id="listado_alumno" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Detalle Ficha Medica</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>CI</th>
                <th>Encargado</th>
                <th></th>
            </tr>
        </thead>
    </table>

    <script>
        function editar_alumno(data) {
            window.location.href = 'FormularioAlumno.php?idAlumno=' + data.id;
        }

        function borrar_alumno(data) {
            $.post("BorrarAlumno.php", {
                idAlumno: data.id
            },
            function(data) {
                alert(data);
                location.reload();
            });
            }

        $(document).ready(function(){
          var table=  $('#listado_alumno').dataTable({
            "ajax": "http://localhost/BuscarAlumno.php?idAlumno=0",
            "responsive": true,
            "columns": [{
                "data": "idAlumno",
                "className": "text-center"
            },
            {
                "data": "nombre_alumno",
                "className": "text-center"
            },
            {
                "data": "apellido_alumno",
                "className": "text-center"
            },
            {
                "data": "edad_alumno",
                "className": "text-center"
            },
            {
                "data": "genero_alumno",
                "className": "text-center"
            },
            {
                "data": "Det_fichamedica",
                "className": "text-center"
            },
            {
                "data": "Direccion_alumno",
                "className": "text-center"
            },
            {
                "data": "Telefono",
                "className": "text-center"
            },
            {
                "data": "CI_alumno",
                "className": "text-center"
            },
            {
                "data": "encargado",
                "className": "text-center"
            },
            {
            "data": null,
            "render": function(data) {
                return "<button type='button' class='btn btn-primary' id=" + data.idAlumno + " onclick='editar_alumno(this)'>Editar</button>\
                <button type='button' class='btn btn-danger' id=" + data.idAlumno + " onclick='borrar_alumno(this)'>Borrar</button>"
            }
            }
            ]
        });
        });
    </script>
    <div>
        <button type="button" class="btn btn-success" onclick="window.location.href = 'FormularioAlumno.php'">Volver</button>
    </div>
</body>

</html>