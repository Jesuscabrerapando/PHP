<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="guardaractividad.php" method="post">
  <label for="email">Correo electrónico:</label>
  <input type="email" id="email" name="email">
  <br>
  <label for="units">Número de unidades:</label>
  <input type="number" id="units" name="units" min="0">
  <br>
  <input type="submit" value="Enviar">
</body>
</html>