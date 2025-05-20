<?php
/* Verificar si un número es primo*/
echo '<br><hr>' . '<b>EJERCICIO 23: Verificar si un número es primo</b>' . '<br>';

function verificarPrimo($num)
{
    if (!is_numeric($num) || $num < 2) {
        return false;
    }
    
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

for ($i = 1; $i <= 13; $i++) {
    if (verificarPrimo($i)) {
        echo "<br>$i es un numero primo<br>";
    } else {
        echo "<br>$i NO es un numero primo<br>";
    }
}
