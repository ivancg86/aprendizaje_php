<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Formularios</title>

</head>

<body>
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                Alumno
            </div>
            <div class="card-body">
                <form action="tabla.php" method="GET">
                    <div class="mb-3 row">
                        <label for="txtNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Introduce el nombre" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cbxCurso" class="col-sm-2 col-form-label">Curso</label>
                        <div class="col-sm-10">
                            <select name="cbxCurso" id="cbxCurso" class="form-select">
                                <option value="daw2a">DAW2A</option>
                                <option value="daw2b">DAW2B</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label for="rbTurno" class="col-sm-2 col-form-label">Turno</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rbTurno" id="rbMañana" value="Mañana" checked>
                                <label class="form-check-label" for="rbMañana">Mañana</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rbTurno" value="Tarde" id="rbTarde">
                                <label class="form-check-label" for="rbTarde">Tarde</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="chxIdioma" class="col-sm-2 col-form-label">Idioma</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chxIdioma[]" id="chxCatalan" value="Catalán">
                                <label class="form-check-label" for="chxCatalan">Catalán</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chxIdioma[]" id="chxCastellano" value="Castellano">
                                <label class="form-check-label" for="chxCastellano">Castellano</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chxIdioma[]" id="chxIngles" value="Inglés">
                                <label class="form-check-label" for="chxIngles">Inglés</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label for="dateNacimiento" class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="dateNacimiento" id="dateNacimiento">
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label for="dateNacimiento" class="col-sm-2 col-form-label">Fecha</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="txtDescrip" id="txtDescrip" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>