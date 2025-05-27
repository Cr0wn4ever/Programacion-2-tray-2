<?php
/* Determinar si una palabra es un palíndromo*/
echo '<br><hr>' . '<b>EJERCICIO 23: Determinar si una palabra es un palíndromo</b>' . '<br>';

function determinarPalV($string)
{
    $aux = str_split($string);
    $reverse = array_reverse($aux);

    foreach ($aux as $position => $letra) {
        $validate = false;
        if ($letra === $reverse[$position]) {
            $validate = true;
        }
    }

    if ($validate) {
        echo "<br>Tal parace que tenemos un palindromo '$string', si es un palindromo<br>";
        print_r($aux);
        echo " ===> ";
        print_r($reverse);
        echo "<hr><br>";
    } else {
        echo "<br>'$string' no parece ser un palindromo<br>";
        print_r($aux);
        echo " ===> ";
        print_r($reverse);
        echo "<hr><br>";
    }
}



determinarPalV("testeando");
determinarPalV("ANA");
determinarPalV("reconocer");
determinarPalV("casa");
determinarPalV("salas");
determinarPalV("PROGRAMACION");
