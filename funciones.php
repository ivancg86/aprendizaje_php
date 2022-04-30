<?php
//include('funcion.php');
//require('funcion.php');
include_once('funcion.php'); //Solo incluye uno
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>

    <?php
    //Pasar por referencia &

    $num1 = 3;
    $num2 = 5;
    echo $num1 . ' - ' . $num2;
    swap($num1, $num2);
    echo '<br>';
    echo $num1 . ' - ' . $num2;
    ?>

</body>

</html>