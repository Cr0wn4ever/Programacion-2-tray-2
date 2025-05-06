<?php
echo '<hr>' . '<br>' . '<h2>Aqui empiezan los famosos bucles, muy divertidos, y puede que confusos al inicio</h2>' . '<br>' . '<b><i>Tampoco me voy a alargar mucho mas, es un bucle simple
que muestra un poco de lo basico que vimos antes, ademas de agregar un condicional para imprimir solo los numeros que pasen la condicion de ser pares.</b></i>' . '<br>';

print '<br>' .
    '$iteracion = 1; <br>' .
    'while ($iteracion < 20){
if($iteracion % 2 == 0){
echo $iteracion
}}' . '<br>';

echo '<br>' . '<b>Obtendriamos</b>: ';

$iteracion = 1;

while ($iteracion < 20) {

    if ($iteracion % 2 == 0) {
        echo $iteracion . ' ';
    }

    $iteracion++;
}

//solo quise hacer el ejercicio del while que dejo de ultimo en los mensajes del grupo. La verdad que desconozco por que saltarse el resto de bucles por el momento.

/*EL UTLIMO EJERCICIO QUE DESCRIBIO EN EL MENSAJE DE WHATSSAP PARECIA MAS ALGO DE HACER EN CONSOLA QUE EN PROYECTO BASICO DE PHP, SEGUN ENTIENDO, SI SE PRETENTE SOLICITAR
DATOS AL USUARIO, DEBERIA HACERSE CON UN INPUT Y UN FORMULARIO APROPIADO, Y QUE EL MISMO SE REPITIERA TANTAS VECES COMO FUARA NECESARIO, EN ESTE CASO, 10.*/