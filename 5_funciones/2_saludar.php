<?php
/* 
Crear una función llamada saludar que recibe la hora en formato 0-24:
    si la hora recibida es de de 6 a 12 : saludar con "buenos días!"
    si la hora recibida es de de 12 a 20 : saludar con "buenas tardes!"
    si la hora es de 20 a 6 (o si no entra en ninguno de los dos intervalos anteriores): "buenas noches!"
*/

function saludar($hora) {
    if ($hora >= 6 , $hora < 12) {
        echo "¡Buenos días!<br>";
    } elseif ($hora >= 12 , $hora < 20) {
        echo "¡Buenas tardes!<br>";
    } else {
        echo "¡Buenas noches!<br>";
    }
}

saludar(8);   
saludar(15);  
saludar(22);  
saludar(4);   
?>