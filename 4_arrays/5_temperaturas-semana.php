<?php
$dias = [
    "lunes",
    "martes",
    "miercoles",
    "jueves",
    "viernes",
    "sabado",
    "domingo"
];

$temperaturas = [];

for ($i = 0; $i < count($dias); $i++) {
    // echo $dias[$i];
    // echo "<br>";
    $temperaturas[$dias[$i]] = rand(5, 15);
}

echo "<hr>";

foreach ($dias as $d) {
    $temperaturas[$d] = rand(5, 15);
    }

foreach ($temperaturas as $dia => $grados) {
    echo "el $dia hace $grados ºC <br>";
}
