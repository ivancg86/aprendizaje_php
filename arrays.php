<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>

    <h1>
        <?php
        //Arrays indexados
        $notas = array(9.3, 9.2, 9.6, 10);
        //$notas = [9.3, 9.2, 9.6];

        //for
        for ($i=0; $i < count($notas); $i++) { 
            echo $notas[$i];
            echo '<br>';
        }

        echo '<br>';

        //foreach
        foreach ($notas as $nota) {
            echo $nota;
            echo '<br>';
        }
        ?>
    </h1>
    <h1>
        <?php
        //Arrays asociativos
        $notas = [
            'Ivan' => 9.3,
            'Isabel' => 9.2,
            'Andres' => 9.6
        ];

        echo $notas['Ivan'];
        echo '<br>';

        foreach ($notas as $key => $nota) {
            echo $key . ' - ' . $nota;
            echo '<br>';
        }
        ?>
    </h1>
    <h1>
        <?php
        //Arrays multidimensionales
        $clase = [
            [9.3, 9.2, 9.6],
            [9, 9.1, 9.5],
            [9.4, 9.7, 9.8]
        ];

        for ($i=0; $i < count($clase); $i++) { 
            for ($j=0; $j < count($clase[$i]); $j++) { 
                echo $clase[$i][$j] . ' ';
            }
            echo '<br>';
        }

        //Modificar
        //$clase[0][0] = 7;

        $clase = [
            'Ivan' => [9.3, 9.2, 9.6],
            'Isabel' => [9, 9.1, 9.5],
            'Andres' => [9.4, 9.7, 9.8]
        ];

        foreach ($clase as $key => $notas) {
            echo $key . ' - ';
            foreach ($notas as $nota) {
                echo $nota . ' '; 
            }
            echo '<br>';
        }
        ?>
    </h1>

</body>

</html>