<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $numeroAleatorio = rand(1, 100);
 echo "Número generado: " . $numeroAleatorio;
 echo ($numeroAleatorio > 50) ? "Cara" : "Cruz";
?>

</body>
</html>