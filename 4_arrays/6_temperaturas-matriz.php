<?php
$semana = [
    "lunes",
    "martes",
    "miercoles",
    "jueves",
    "viernes",
    "sabado",
    "domingo"
];

$temperaturas = [];

foreach ($semana as $dia) {
    $temperaturas[$dia] = [
        'mañana' => rand(15, 25),
        'tarde' => rand(5, 15),
    ];
}

foreach ($temperaturas as $dia => $momentos) {
    echo "La temperatura del $dia por la mañana es de " . $momentos['mañana'] . "ºC y por la tarde de " . $momentos['tarde'] . "ºC.";
    echo "<br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";

?>

<table border="1">
    <tr>
        <th>Día</th>
        <th>Mañana</th>
        <th>Tarde</th>
    </tr>
    <?php foreach ($temperaturas as $dia => $momentos) {
        echo ("<tr>");
        echo ("<td>$dia</td>");
        foreach ($momentos as $valor) {
            echo ("<td>$valor</td>");
        }
        echo ("</tr>");
    }  ?>
</table>