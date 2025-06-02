<?php

function func1()
{
    $esPrimo = true;

    $contarPrimos = 0;

    $contarNoPrimos = 0;

    $contarPares = 0;

    $contarImpares = 0;

    for ($i = 0; $i < 100; $i++) {

        if ($i % 2 == 0) {
            $contarPares++;
        }

        if ($i % 2 == 1) {
            $contarImpares++;
        }

        if (!is_numeric($i) || $i < 2) {
            $esPrimo = false;
        }

        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $esPrimo = false;
            }
        }

        if ($esPrimo) {
            $contarPrimos++;
        } else {
            $contarNoPrimos++;
        }

        $esPrimo = true;
    }

    $cuentas = array(
        "PRIMOS" => $contarPrimos,
        "NO PRIMOS" => $contarNoPrimos,
        "PARES" => $contarPares,
        "NO PARES" => $contarImpares
    );

    return $cuentas;
}

echo "<hr><b><h2>FUNCION 0: Determinar de entre los 100 primeros numeros naturales cuales son pares, impares, primos, y no primos.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func1()' Obtenemos los siguiente: </b><br>";

$imprime = func1();

foreach ($imprime as $key => $value) {
    echo "<br><b><i>$key = $value</b></i><br>";
}
