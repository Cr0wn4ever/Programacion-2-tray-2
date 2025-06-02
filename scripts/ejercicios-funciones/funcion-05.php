<?php

function func5()
{
    $fibonacci = [];

    for ($i = 0; $i <= 150; $i++) {
        if ($i < 2) {
            $fibonacci[] = $i;
            // array_push($fibonacci, $i);
        } else {
            $fibonacci[] = ($fibonacci[$i - 1]) + ($fibonacci[$i - 2]);
            // array_push($fibonacci, ($fibonacci[$i - 1] + $fibonacci[$i - 2]));
        }
    }

    return $fibonacci;
}

echo "<hr><b><h2>FUNCION 5: Generar los primeros 150 numeros de la serie fibonacci.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func5()' Obtenemos los siguiente:</b><br>";

foreach (func5() as $fibo) {
    echo "$fibo<br>";
}
