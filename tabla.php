<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Tabla</title>
</head>

<body>
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                Información
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Curso</th>
                        <th>Turno</th>
                        <th>Idiomas</th>
                        <th>Descripción</th>
                    </tr>
                    <tr>
                        <td><?php echo $_GET['txtNombre']  ?></td>
                        <td><?php echo $_GET['dateNacimiento'] ?></td>
                        <td><?php echo $_GET['cbxCurso'] ?></td>
                        <td><?php echo $_GET['rbTurno'] ?></td>
                        <td>
                            <?php
                            if (isset($_GET['chxIdioma'])) {
                                foreach ($_GET['chxIdioma'] as $value) {
                                    echo $value . "<br>";
                                }
                            }

                            ?>
                        </td>
                        <td><?php echo $_GET['txtDescrip'] ?></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

</body>

</html>