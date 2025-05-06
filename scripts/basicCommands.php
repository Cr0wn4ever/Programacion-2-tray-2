<?php
// esto es un comentario para explicar que en este mismo script pienso incluir varios de los comandos que me parecieron mas basicos para mezclar.

$nombre = "victor jhoann patino castellar";
$ciudad = "cumana";

print 'Si quisieramos imprimir una serie variables desde este script, podriamos hacer sin problemas, ya sea con el echo, o con el print...';
echo 'Creando las variables ' . '<strong>' . '$nombre = victor jhoann patino castellar' . '</strong>' . '<strong>' . ', ' . '$ciudad = cumana' . '</strong>' . ', podemos empezar a dar valor a nuestras primeras variables.';
$nombre = "victor jhoann patino castellar";
$ciudad = "cumana";

echo '<br>' . '<b>' . $nombre . '</b>' . ' - ' . '<b>' . $ciudad . '</b>' . '- En este caso, ambas variables son de tipo texto, o string.' . '<br>';

//empecemos con la tarea

$frases = array("Las rosas son rojas.", "Me gusta el color morado.", "Lo unico que se, es que no se nada."); //aqui ya me estoy metiendo con los arreglos, pero se me hacia menos aparatoso hacerlo asi.

echo '<br>' . 'Algo que no se considera buena practica, ademas de ser muy engorroso de hacer, es mezclar el html con el php, normalmente el php se deja solo para codigo puro, scripts de backend o funciones muy especificas dentro del flujo del sistema.'
    . '<br>' . 'como por ejemplo lo uso ahora para darle formato a este pequeno texto explicativo...' . '<br>';

print '<br>' . 'Para imprimir las tres frases, opte por hacer un arreglo ($frases = array("Las rosas son rojas.", "Me gusta el color morado.", "Lo unico que se, es que no se nada.")) para ahorrarme un poco el trabajo, y concatenar las frases directamente...'
    . '<br>' . $frases[0] . '<br>' . $frases[1] . '<br>' . $frases[2] . '<br><br>';

print_r($frases);

print '<br>' . '<br>' . 'DEFINAMOS ALGUNAS VARIABLES BASICAS MAS... ($estado y $edad)' . '<br>';

$estado = 'ESTUDIANTE';
$edad = 23;

echo '<br>' . "Esas mismas variables ya las podemos imprimir una vez definidas: " . $nombre . ' - ' . $estado . ' - ' . $edad . ' - ' . $ciudad . '<br>';

$mentira = true;
$peso = 76.56;

print '<br>' . '<br>' . '<h3>Que tal otro tipo de datos...?</h3>' . '<br>' . 'Por ejemplo: $mentira = true y $peso = 76.56' . '<br>';

echo '<br>' . 'En efecto, las podemos imprimir sin problema con un simple echo: ' . '($mentira = 1 ya que es booleano, lo que se podria comprobar con un var_dump($mentira)) ' . $mentira . ', ' . $peso;

print '<br>' . '<h2>Pasemos a operaciones aritmeticas!</h2>' . '<br>';

$modulo = 10 % 2;
$exponente = 10 ** 2;

echo '<br>' . 'Aparte de los operadores arimeticos basicos como el +, - , *, o /. Existen otro tipo de simbolos que podemos usar, como el de modulo (%) y el de exponente (**), ambos utiles para ciertas operaciones matematicas necesarias del dia a dia.' . '<br>'
    . 'Por ejemplo: si tuvieramos la operacion 10 % 2 = ' . $modulo . ' o la operacion exponecial 10**2 = ' . $exponente . '<br>';


$op1 = 10 > 2;
$op2 = true == false;
$op3 = true != false;

print '<br>' . 'Ademas de estos operadores aritmeticos, tambien estan los de comparacion (<, >, ==, !=), con los que podemos comparar, valga la redundancia, los valores que veamos convenientes. Por ejemplo: 10 > 2 = ' . $op1 . ', o '
    . 'true == false = (A efectos practicos aqui pondre un cero (0) ya que el resultado seria false, por tanto es cero, o vacio.)' . $op2 . ', o true != false = ' . $op3;

echo '<br>' . '<b>Estos operadores siempre arrojan como resultado valores booleanos que podemos usar para hacer cualquier cantidad de comprobaciones, son realmente utiles en el dia a dia de cualquier programador.</b>' . '<br>';
