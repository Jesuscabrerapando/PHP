<?php
echo ("<h2>Ejemplos con Arrays</h2>");

$ciudades = [
    "Madrid" => 150,
    "Sevilla" => 175,
    "Málaga" => 147
];

echo ($ciudades["Sevilla"]);//acceso al value por corchetes
unset($ciudades["Sevilla"]);//eliminas sevilla del array
//echo("listado de array " .array_values($ciudades));//mostrar los valores del array 
echo ($ciudades["Madrid"]) . "</p>";
//echo($ciudades["Sevilla"]);
echo ("<p>" . $ciudades["Málaga"] . "</p>");

$colores = [
    "primario" => "red",
    "secundario" => "green",
    "claro" => "orange",
    "oscuro" => "black"
];

echo ("<p style='color:blue'>Un texto de ejemplo</p>");
echo ("<p style='color:$colores[primario]'>Un texto de ejemplo</p>");
