<?php

function func4()
{

    $contarPositivos = 0;
    $contarNegativos = 0;
    $contarCeros = 0;

    $number = 0;

    for ($i = 0; $i < 100; $i++) {

        $number = mt_rand(-100, 100);

        if ($number>0) {
            $contarPositivos++;
        } elseif ($number<0) {
            $contarNegativos++;
        } else {
            $contarCeros++;
        }

        echo "$number \t";
    }

    echo "<br>";

    $cuentas = array(
        "POSITIVOS" => $contarPositivos,
        "NEGATIVOS" => $contarNegativos,
        "CEROS" => $contarCeros
    );

    return $cuentas;
}

echo "<hr><b><h2>FUNCION 3: Generar 100 numeros aleatorios y determinar la cantidad de positivos, negativos, o cero.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func4()' Obtenemos los siguiente:</b> ";

foreach (func4() as $key => $value) {
    echo "<br><b>$key = $value</b><br>";
}
