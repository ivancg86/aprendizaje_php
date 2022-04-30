<?php

function swap(int &$a, int &$b): int
{
    $aux = $a;
    $a = $b;
    $b = $aux;

    return $aux;
}

?>