<?php

/**
 * Completar el fichero para que se muestren los pokemon del tipo indicado por parámetros de la url
 *  En caso de no indicar ningún tipo, mostrarlos todos
 */

$arrayPokemon = [
    [
        "id" => 1,
        "nombre" => "bulbasaur",
        "tipo" => "planta"
    ],
    [
        "id" => 2,
        "nombre" => "ivisaur",
        "tipo" => "planta"
    ],
    [
        "id" => 3,
        "nombre" => "venusaur",
        "tipo" => "planta"
    ],
    [
        "id" => 4,
        "nombre" => "charmander",
        "tipo" => "fuego"
    ],
    [
        "id" => 5,
        "nombre" => "charmeleon",
        "tipo" => "fuego"
    ],
    [
        "id" => 6,
        "nombre" => "charizar",
        "tipo" => "fuego"
    ],
    [
        "id" => 7,
        "nombre" => "squirtle",
        "tipo" => "agua"
    ],
    [
        "id" => 8,
        "nombre" => "wartortle",
        "tipo" => "agua"
    ],
    [
        "id" => 9,
        "nombre" => "blastoise",
        "tipo" => "agua"
    ],
];

function mostrarPokemon()
{
    global $arrayPokemon;
    echo "<ul>";
    foreach ($arrayPokemon as $key => $pokemon) {
        echo "<li>$pokemon[id]: $pokemon[nombre] | $pokemon[tipo] </li>";
    }
    echo "</ul>";
}

function filtrarPokemon($tipo)
{
    global $arrayPokemon;
    
    // Filtrar el array de Pokémon por el tipo indicado
    $pokemonFiltrados = array_filter($arrayPokemon, function($pokemon) use ($tipo) {
        return $pokemon['tipo'] === $tipo;
    });
    
    // Si hay Pokémon filtrados, mostrarlos
    if (!empty($pokemonFiltrados)) {
        echo "<ul>";
        foreach ($pokemonFiltrados as $pokemon) {
            echo "<li>$pokemon[id]: $pokemon[nombre] | $pokemon[tipo]</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No se encontraron Pokémon del tipo '$tipo'.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (!isset($_GET['tipo'])) {
        // Si no se especifica un tipo, mostrar todos los Pokémon
        mostrarPokemon();
    } else {
        // Si se especifica un tipo, filtrar y mostrar los Pokémon correspondientes
        filtrarPokemon($_GET['tipo']);
    }
    ?>

</body>

</html>
