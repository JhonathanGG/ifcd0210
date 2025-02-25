<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  $string = "Hola, Que tal estas?";
  $numero1 = 10;
  $numero2 = 25;
  $booleana = true;

  echo $string . " Bien Tu?";
  echo "Suma: " . ($numero1 + $numero2);
  echo "División: " . ($numero1 / $numero2);
  echo "Módulo: " . ($numero1 % $numero2);
  echo ($numero1 >= $numero2) ? "$numero1 es mayor o igual que $numero2" : "$numero1 es menor que $numero2<br>";
  echo "Variable booleana: " . ($booleana ? 'true' : 'false');
  echo "Negación de la variable booleana: " . (!$booleana ? 'true' : 'false');
?>

</body>
</html>