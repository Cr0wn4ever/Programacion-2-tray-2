<?php

function func7()
{
    for ($j = 0; $j < 30; $j++) {
        $factorial = 1;
        for ($i = $j; $i >= 1; $i--) {
            $factorial *= $i;
        }
        echo "<b><i>!$j = $factorial</i></b><br>";
    }
}

echo "<hr><b><h2>FUNCION 7: Calcular el factorial de los primeros 50 numero pares mostrando el numero y el factorial.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func7()' Obtenemos los siguiente:</b><br>";

func7();