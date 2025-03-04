<?php
/* 
    Crear una función por cada operación básica: suma, resta, multiplicación y división
    Probar individualmente cada función para ver si funcionan correctamente (cuidado con dividir entre 0)

    Una vez hechas, hacer una función que reciba 3 parámetros (numero1, numero2 y operación a realizar):
    Si la función recibe la operación "+", ha de llamar a la función "suma" creada con anterioridad con los números recibidos.
    de igual manera ha ocurrir si recibe la operación "-", "*" y "/"
    Si la operación no es ninguna de las anteriores, se ha de mostrar un mensaje de error: "Operación desconocida"

*/
function suma($a, $b) {
    return $a + $b;
}


function resta($a, $b) {
    return $a - $b;
}


function multiplicacion($a, $b) {
    return $a * $b;
}


function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero";
    }
    return $a / $b;
}


echo "Suma: " . suma(5, 3) . "\n";
echo "Resta: " . resta(5, 3) . "\n";
echo "Multiplicación: " . multiplicacion(5, 3) . "\n";
echo "División: " . division(5, 0) . "\n";  // Caso con división por 0
?>
