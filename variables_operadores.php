<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y operadores</title>
</head>

<body>

    <h1>
        <?php
        //String
        $nombre = 'Ivan ';
        $apellido = 'Cabañas';
        echo $nombre . $apellido;
        ?>
    </h1>
    <h1>
        <?php
        /*
            Aritméticos
            + Suma
            - Resta
            * Multiplicación
            / División
            % Modulo
            ** Exponente
        */

        //$number
        $numero = 3;

        $numero2 = $numero + $numero;

        echo $numero2;

        ?>
    </h1>
    <h1>
        <?php
        /*
            Asignación
            $x = $y
            $x += $y
            $x -= $y
            $x *= $y
            $x /= $y
            $x %= $y
        */

        //$number
        $numero = 3;
        //Float
        $float = 4.5;

        $numero += $float;

        echo $numero;

        ?>
    </h1>

</body>

</html>