<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Fundamentos PHP</h2>
    <a href="https://www.php.net/manual/es/">Documentacion PHP</a>
    <?php
    echo("funciona PHP");
    $unidades=15;
    $precio=9.95;
    $descuento=TRUE;
    $mensaje="Muchas gracias por su compra";

    $total=$unidades*$precio;
    echo("el total es $total.");
    echo($mensaje);

    //Arrays
    echo("<h3>Arrays</h3>");
    $ciudades=["madrid","sevilla","valencia"];
    echo($ciudades[1]);

    echo("<h4>Array con clave</h4>");
    $ventas=[
        "juan"=>1950.95,
        "maria"=>147.25
    ];
    echo($ventas["juan"])

    ?>

</body>
</html>