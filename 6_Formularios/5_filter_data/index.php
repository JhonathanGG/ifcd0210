<?php

/**
 * 
 * Completar el siguiente programa para que realice lo siguiente:
 *  - siempre muestra un listado de películas
 *  - si recibe por URL un parámetro "selected" con un número, debajo de la lista 
 * 
 */

$sci_fi_movies = [
    "Gatacca",
    "Dune",
    "The substance",
    "Ex Machina",
    "The matrix",
    "Interstellar"
];

function showMovies($movies)
{
    // Comprueba si existe el parámetro 'selected' en la URL
    $selected = isset($_GET['selected']) ? (int)$_GET['selected'] : null;
    
    echo "<ul>";
    foreach ($movies as $key => $value) {
        // Si la película coincide con la seleccionada, agregar clase 'highlight'
        $highlightClass = ($selected === $key) ? "class='highlight'" : '';
        echo "<li $highlightClass>$value</li>";
    }
    echo "</ul>";
}

function showSelected()
{
    // comprobar si existe "selected"
    if (isset($_GET['selected']) && is_numeric($_GET['selected'])) {
        $selectedIndex = (int)$_GET['selected'];
        echo "<p>Película seleccionada: " . $GLOBALS['sci_fi_movies'][$selectedIndex] . "</p>";
    } else {
        echo "<p>No hay seleccionada ninguna película</p>";
    }
}

function highlightSelected($movie, $selectedIndex, $index)
{
    // Función opcional para resaltar la película seleccionada
    if ($index === $selectedIndex) {
        return "class='highlight'";
    }
    return '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5_filter_data</title>
    <style>
        .highlight {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <h1>SciFi Movies</h1>

    <?php showMovies($sci_fi_movies); ?>

    <?php showSelected(); ?>

</body>

</html>
