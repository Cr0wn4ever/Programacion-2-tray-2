<?php
function func9(){
    for($i = 1; $i<=200; $i++){
        if($i%4==0 || $i%7==0 || $i%8==0){
            continue;
        }
        echo "$i \t";
    }
}
echo "<hr><b><h2>FUNCION 9: Imprimir numeros del 1 al 200 omitiendo los multiplos de 4, 7, y 8.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func9()' Obtenemos los siguiente:</b>";

func9();