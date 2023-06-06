<?php

//En un array guarda las temperaturas con decimales de cada día 
//de la semana
//Muestra las temperaturas en pantalla
// *reto : muestra la media de temperatura

$temperaturas = array(15, 12.3, 15.2, 16.7, 17, 25.6, 14.2);

foreach ($temperaturas as $temp) {
    echo $temp . "<br>";
}
$suma = array_sum($temperaturas);
$cantidad = count($temperaturas);
$promedio = $suma / $cantidad;
echo("La temperatura promedio es ".$promedio)


//las unidades son 150
//el precio es 9.95
//muestra el total redondeado a dos decimales



//en un array tienes tres clientes con sus ventas
//muestra el listado de clientes con sus ventas y su iva incluido (21%)
//si la venta es superior a 1000, tiene un descuento antes de iva del 5%



//crea un formulario en html con los campos para introducir
//tu correo, tu contraseña y la ciudad a elegir de una lista de 4
//al enviar datos
//si la contraseña es 123
//te muestra la ciudad elegida y el mensaje que está disponible
//si no es la contraseña 123 te dice que la ciudad no está disponible.

if(isset($_POST['email'], $_POST['password'], $_POST['city'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    
    if($password == "123"){
      echo "La ciudad elegida es " . $city . " y está disponible.";
    }else{
      echo "La ciudad no está disponible.";
    }
  }
  