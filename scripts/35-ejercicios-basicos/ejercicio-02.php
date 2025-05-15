<?php
/* Determinar si una persona es mayor de edad (SE ENTIENDE QUE LA MAYORIA DE EDAD SE TOMA A PARTIR DE LOS 18)*/

$edad = 123;

echo '<br><hr>' . '<b>EJERCICIO 02: VERIFICAR QUE una persona es mayor de edad</b>' . '<br>';

if ($edad >= 18 && $edad<=122) {
    echo '<br> Esta persona es mayor de edad <br>';
} elseif ($edad > 122) {
    echo '<br> Esto es sumamente sospechoso, habria que programar otro script para verificar si esta edad es correcta, puesto que el récord de longevidad humana oficialmente reconocido sigue en poder de la francesa Jeanne Louise Calment, que vivió 122 años y 164 días. Entre los hombres, el récord pertenece al japonés Jiroemon Kimura, que vivió 116 años y 54 días <br>';
}elseif($edad<1){
    echo '<br> Esta persona parece haber nacido hace poco, supongo que tiene algunos meses, habria que programar otro script para determinar si la edad es correcta <br>';
}
else{
    echo '<br> Esta persona no es mayor de edad <br>';
}
