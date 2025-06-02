<?php
function func3()
{
    $i = 1;

    while ($i <= 100) {
        
        $esPrimo = true;
        
        if ($i < 2) $esPrimo = false;
        
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $esPrimo = false;
                break;
            }
        }
        
        if ($esPrimo || $i%2==0) {
            $i++;
            continue;
        }
        
        echo "$i, ";

        $i++;
    }
}
echo "<hr><b><h2>FUNCION 2: Imprimir los numeros del 1 hasta el 100, exceptuando los que sean que pares o primos.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func3()' Obtenemos los siguiente:</b> ";

echo func3();
