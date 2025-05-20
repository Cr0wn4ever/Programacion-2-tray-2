<?php
/* Determinar si un año es par o impar*/
echo '<br><hr>' . '<b>EJERCICIO 23: Determinar si un año es par o impar</b>' . '<br>';

function verificarAnio($year)
{
    if ($year % 2 == 0) {
        echo "<br>El anio $year es par<br>";
    } else {
        echo "<br>El anio $year es impar<br>";
    }
}

for ($i = 1999; $i <= 2025; $i++) {
    verificarAnio($i);
}
