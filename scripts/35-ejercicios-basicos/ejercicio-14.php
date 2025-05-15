<?php
/* Contar las vocales en una cadena de texto*/
echo '<br><hr>' . '<b>EJERCICIO 14: Contar las vocales en una cadena de texto</b>' . '<br>';

$string = "Cuantas vocales hay aqui?";

$totalVocales = preg_match_all('/[aeiouAEIOU]/', $string);

echo "<br>Si quisiera saber cuantas vocales hay en la frase: 'Cuantas vocales hay aqui?'<br>El resultado seria: $totalVocales ===> " . preg_replace('/[aeiouAEIOU]/', '*', $string) . "<br>" .
    '<br><span style="color:red;">Aca se uso una expresion regular para recorrer el string y contar el numero total de vocales, una forma mas eficiente de resolver este ejercicio "$totalVocales = preg_match_all(\'/[aeiouAEIOU]/\', $string);"</span><br>';

$aux = str_split($string);
$vocales = ['a', 'e', 'i', 'o', 'u'];
$contarVocal = 0;

foreach ($aux as $letra) {
    if (in_array(strtolower($letra), $vocales)) {
        $contarVocal++;
    }
}

/* print_r($aux); */

echo "<br>Si resolvieramos el mismo ejercicio empleando un foreach, lo primero seria convertir el string a un array, y luego crear un array con las vocales, para evitar usar condicionales innecesarios...<br>
'Cuantas vocales hay aqui?'<br>
Total de vocales: $contarVocal<br>";
