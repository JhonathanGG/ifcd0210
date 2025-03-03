<?php
 /* 
    Crear una función suma que reciba dos números como parámetros
    y muestra por pantalla su suma con un echo

    Hacer otra versión de la función, pero esta vez tiene que devolver el valor
     
 */

function suma($num1, $num2) {
    $resultado = $num1 + $num2;
    echo "La suma es: " . $resultado . "<br>";
}

suma(5, 3); 
?>

<?php

function suma($num1, $num2) {
    return $num1 + $num2;
}

$resultado = suma(5, 3);

echo "La suma es: " . $resultado . "<br>"; 
?>
