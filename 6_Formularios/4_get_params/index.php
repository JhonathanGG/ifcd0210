<?php
/* 

Crear un programa en php que reciba dos parametros por la URL num1 y num2
en caso de que no se especifiquen, el programa mostrará el texto: "por favor, indique los parámetros correspondientes"
y en caso de que se especifiquen mostrar la suma de ambos números utilizando una función que devuelva: "la suma es: X"


Pista: la función isset($variable), nos permite comprobar si una variable está definida
*/


if (!isset($_GET['num1']) && !isset($_GET['num2'])) {
    echo "Por favor, indique los parámetros correspondientes";
} else {    
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];    
    echo suma($num1, $num2);
}
function suma($num1, $num2) {
    $resultado = $num1 + $num2;
    return "La suma es: " . $resultado;
}

