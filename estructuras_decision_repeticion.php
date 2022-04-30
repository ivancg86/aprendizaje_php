<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de decisión</title>
</head>

<body>

    <h1>
        <?php
        /*
            Comparación
            == Igual
            === Idéntico (iguales y del mismo tipo)
            != No igual
            != No idéntico
            > Mayor
            < Menor
            >= Mayor o igual
            <= Menor o igual

            Lógicos
            and, && Verdadero si $x y $y son verdaderos ($x && $y)
            or, || Verdadero si $x o $y son verdaderos ($x || $y)
            ! Verdadero si $x no es verdadero (!$x)
            xor Verdadero si $x y $y son verdaderos, pero no los 2 ($x xor $y)
        */

        $edad = 40;

        //If-elseif-else
        if ($edad >= 0 && $edad < 18) {
            echo 'La persona es menor de edad';
        } elseif ($edad <= 30) {
            echo 'La persona es joven';
        } else {
            echo 'La persona es madura de edad';
        }

        ?>
    </h1>
    <h1>
        <?php

        $numero = 1;

        //Switch
        switch ($numero) {
            case 1:
                echo 'Lunes';
                break;

            case 2:
                echo 'Martes';
                break;

            case 3:
                echo 'Miercoles';
                break;

            default:
                echo 'otro dia';
                break;
        }

        ?>
    </h1>
    <h1>
        <?php

        $numero = 1;

        //for
        for ($i=0; $i < 10; $i++) { 
            echo $i;
            echo '<br>';
        }

        //While
        $i = 0;
        while ($i < 10) {
            echo $i;
            echo '<br>';
            $i++;
        }

        //Do-while
        $i = 0;
        do {
            echo $i;
            echo '<br>';
            $i++;
        } while ($i <= 10);
        ?>
    </h1>


</body>

</html>