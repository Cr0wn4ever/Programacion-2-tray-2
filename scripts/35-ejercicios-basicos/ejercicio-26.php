<?php
/* Clasificar un número como pequeño, mediano o grande*/
echo '<br><hr>' . '<b>EJERCICIO 23: Clasificar un número como pequeño, mediano o grande</b>' . '<br>';

function determinarNum($num)
{
    if (!is_numeric($num)) {
        return 0;
    }

    if ($num < 10) {
        echo "<br>$num es un numero pequeno<br>";
    } elseif ($num >= 10 && $num <= 100) {
        echo "<br>$num es un numero mediano<br>";
    } elseif ($num > 100) {
        echo "<br>($num) YA ESTAMOS HABLANDO DE NUMERO GRANDES AQUI!!!<br>";
    } else {
        echo "<br>algo raro paso aqui, pero para eso lo valide.<br>";
    }
}


determinarNum(6);
determinarNum(13);
determinarNum(113);
determinarNum(99);
determinarNum(1500);
determinarNum('a');
