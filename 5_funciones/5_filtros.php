<?php
/* 
Función "filtrar" que recibe un array de películas
y devuelve otro array con aquellas películas que pertenecen a un género especificado por parámetro


Función "mostrar" que recibe un array de películas 
y las muestra en sus correspondientes divs html como en  el ejercicio 7 del apartado 4_arrays

*/

$peliculas = [
    ["titulo" => "Inception", "genero" => "Ciencia ficción", "anio" => 2010],
    ["titulo" => "Titanic", "genero" => "Romance", "anio" => 1997],
    ["titulo" => "The Matrix", "genero" => "Ciencia ficción", "anio" => 1999],
    ["titulo" => "The Notebook", "genero" => "Romance", "anio" => 2004],
    ["titulo" => "Avengers: Endgame", "genero" => "Acción", "anio" => 2019],
    ["titulo" => "Joker", "genero" => "Drama", "anio" => 2019]
];


function filtrar($peliculas, $genero) {
    $peliculasFiltradas = [];
    
    foreach ($peliculas as $pelicula) {
        if ($pelicula["genero"] === $genero) {
            $peliculasFiltradas[] = $pelicula;
        }
    }
    
    return $peliculasFiltradas;
}


function mostrar($peliculas) {
    foreach ($peliculas as $pelicula) {
        echo "<div class='pelicula'>";
        echo "<h3>" . htmlspecialchars($pelicula["titulo"]) . "</h3>";
        echo "<p><strong>Género:</strong> " . htmlspecialchars($pelicula["genero"]) . "</p>";
        echo "<p><strong>Año:</strong> " . htmlspecialchars($pelicula["anio"]) . "</p>";
        echo "</div>";
    }
}
?>
