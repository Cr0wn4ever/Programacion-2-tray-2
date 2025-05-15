<?php
/* Determinar si un número es múltiplo de otro */
echo '<br><hr>' . '<b>EJERCICIO 10: Determinar si un número es múltiplo de otro</b>' . '<br>';

function multiplo($n1, $n2)
{
    if ($n1 % $n2 == 0) {
        echo "<br>$n1 es multiplo de $n2<br>";
    } else {
        echo "<br>$n1 no es multiplo de $n2<br>";
    }
}

multiplo(15, 5);
multiplo(1, 5);
multiplo(2, 2);
multiplo(50, 3);
multiplo(25, 5);
