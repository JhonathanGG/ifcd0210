// Crear un fichero que muestre un numero aleatorio entre 1 y 100 y que ademas diga si es par o impar
// utilizar constantes para el minimo y el maximo
// define(nombre,valor)

<?php

$numero = rand (1,100);

define(minimo,1);
define(maximo,100);

if ($numero % 2 == 0) {
    echo $numero . "es par";
} else {
    echo $numero . "es impar";
}
?>


    
