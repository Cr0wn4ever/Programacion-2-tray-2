<?php
/* Verificar si un número es divisible entre 3*/
echo '<br><hr>' . '<b>EJERCICIO 21: Verificar si un número es divisible entre 3</b>' . '<br>';


function verificarDivisibleTres($x)
{
    if ($x % 3 == 0) {
        echo "<br><b>$x es divisible entre 3</b><br>";
    } else {
        echo '<br><span style="color:red;">' . $x . ' no es divisible entre 3</span><br>';
    }
}

verificarDivisibleTres(3);
verificarDivisibleTres(12);
verificarDivisibleTres(4);
verificarDivisibleTres(13);
verificarDivisibleTres(10);
verificarDivisibleTres(114);
