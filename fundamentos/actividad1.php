<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Actividades prácticas</h2>
    <h3>Práctica 1</h3>
    <p>Creas un archivo nuevo llamado actividad1.php</p>
    <p>Declara una variable boleana con valor falso</p>
    <p>Tienes dos ciudades : madrid y valencia. Madrid tiene 185 km y Valencia 225 km</p>
    <p>Muestra la ciudad que vamos a visitar. Si la variable bool es true, visitas madrid, si es falsa visitas valencia</p>
    <p>Muestra la ciudad a visitar y los km</p>
    <?php
    $flag=FALSE;
    $ciudades=[
        "madrid"=>185,
        "valencia"=>225
    ];
    if(!$flag){
    echo("La ciudad es madrid y los km son".$ciudades["madrid"]);
    }
    else
    echo("La ciudad es valencia y los km son".$ciudades["valencia"]);

?>


    
    
</body>
</html>