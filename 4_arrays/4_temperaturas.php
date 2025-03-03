<?php

/* 
Dado un array con la temperatura media de  cada día de la semana, sacar:
 - la temperatura máxima, 
 - la mínima 
 - y la temperatura media

*/

$temperaturas = [12, 15, 13, 12, 16, 11, 13];

$temperatura_maxima = max($temperaturas);

$temperatura_minima = min($temperaturas);

$temperatura_media = array_sum($temperaturas) / count($temperaturas);

echo($temperatura_media);

?>

<?php
$temperaturas = [12, 15, 13, 12, 16, 11, 13];

$temperatura_maxima = $temperaturas[0]; 
$temperatura_minima = $temperaturas[0];  
$suma_temperaturas = 0; 

for ($i = 0; $i < count($temperaturas); $i++) {
        if ($temperaturas[$i] > $temperatura_maxima) {
        $temperatura_maxima = $temperaturas[$i];  
    }

       if ($temperaturas[$i] < $temperatura_minima) {
        $temperatura_minima = $temperaturas[$i];  
    }
    
    
    $suma_temperaturas += $temperaturas[$i];  // Agregamos la temperatura del día a la suma total
}

// Calculamos la media
$temperatura_media = $suma_temperaturas / count($temperaturas);  // Promedio = suma de temperaturas / número de días

// Mostrar los resultados
echo "Temperatura máxima: $temperatura_maxima °C\n";
echo "Temperatura mínima: $temperatura_minima °C\n";
echo "Temperatura media: $temperatura_media °C\n";

?>

