<?php
/* Verificar si un año es bisiesto */
echo '<br><hr>' . '<b>EJERCICIO 04: Verificar si un año es bisiesto</b>' . '<br>';

function EsBisiesto($test)
{
    if ($test % 4 == 0 || $test % 100 == 1 || $test % 400 == 0) {
        echo '<br>' . $test . ' Es un anio bisiesto';
    } else {
        echo '<br>' . $test . ' No es un anio bisiesto';
    }
}

EsBisiesto(2002);
EsBisiesto(2025);
EsBisiesto(2010);
EsBisiesto(1988);
EsBisiesto(1992);
EsBisiesto(1996);
