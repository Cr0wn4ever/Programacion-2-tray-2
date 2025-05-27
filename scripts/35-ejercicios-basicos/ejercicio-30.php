<?php
/* Calcular el factorial de un número*/
echo '<br><hr>' . '<b>EJERCICIO 23: Calcular el factorial de un número</b>' . '<br>';

function calcFactorial($num)
{
    echo "<br>Factorial de $num ==> !$num = ";
    $factorial = 1;
    for ($i = $num; $i >= 1; $i--) {
        $factorial *= $i;
        echo " $num * $i ";
    }
    echo "<br><b>!$num = $factorial</b><br>";
}


calcFactorial(4);
calcFactorial(13);
calcFactorial(3);
calcFactorial(7);
