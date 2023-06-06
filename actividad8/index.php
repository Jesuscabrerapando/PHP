<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>POO en PHP - Herencia</h1>

<?php

require_once('deportes.php');
require_once('jugador.php');
$jugadorFutbol = new Futbol("Cristiano Ronaldo", "Barcelona", "12 millones");
$jugadorBaloncesto = new Baloncesto("Pau Gasol", "Los Angeles Lakers", "4 millones");
$jugadorFutbol->mostrarDatos();
$jugadorFutbol->fichar();
$jugadorBaloncesto->mostrarDatos();
$jugadorBaloncesto->fichar();
?>

</body>
</html>