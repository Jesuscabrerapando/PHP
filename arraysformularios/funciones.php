<?php
//definidas por el usuario
function saludar($nombre){
    return "hola,qué tal ".$nombre;
}

echo(saludar("juan"));

$mensaje="En un lugar de la mancha";
echo(strtoupper($mensaje));
echo(str_replace("a","e",$mensaje));
echo("<hr>");

//tienes una variable numérica entera.
//tienes una variable numérica con decimales
//divides la primera por la segunda.
//muestra el resultado. 
//muestra el resultado redondeado a dos decimales
//muestra el resto de la división

$int = 5;
$float = 2.5;
$result = $int / $float;
echo $result;
echo round($result, 2);
echo $int % $float;
echo("<hr>");



//muestra con un bucle los números pares que hay del 0 al 20 incluidos

//si el número es 14, dejas de mostrar los datos

//si el número es 14, NO muestras el 14, pero sigues

for ($i = 0; $i <= 20; $i++) {
    if ($i == 14) {
        continue;
    }
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
echo("<hr>");