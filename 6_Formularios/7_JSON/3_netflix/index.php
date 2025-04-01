<?php
//leer jason
$jsonContenido = file_get_contents('pelis.json'); 
// convertir jason a array
$pelisArray = json_decode($jsonContenido, true);
//iterar y mostrar dicho array
foreach ($pelisArray as $peli){
echo $peli['titulo']."<br>";
echo $peli['año']."<br>";
echo $peli['director']."<br>";
foreach ($peli['genero'] as $genero) {
echo "genero"."<br>";
}
}
?>






