<?php

function func6()
{
    for ($i = 1; $i <= 300; $i++) {
        if ($i % 2 == 0 && $i % 5 == 0) {
            echo "<br><b>$i ==> Es multiplo de 2 y de 5</b>";
        } elseif ($i % 2 == 0) {
            echo "<br><b>$i ==> Es multiplo de 2</b>";
        } elseif ($i % 5 == 0) {
            echo "<br><b>$i ==> Es multiplo de 5</b>";
        } else {
            echo "<br>$i";
        }
    }
}

echo "<hr><b><h2>FUNCION 6: Recorrer los numeros del 1 al 300 y reemplazar los mismos con las palabras: 
'esta facil', 'hola', 'hola mundo', en caso de ser multiplo de 3, de 5, o de ambos respectivamente.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func6()' Obtenemos los siguiente:</b>";

func6();
