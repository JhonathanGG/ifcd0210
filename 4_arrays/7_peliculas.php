<?php

$netflix = [
    [
        "titulo" => "El señor de los anillos",
        "año" => 2001,
        "director" => "Peter Jackson",
        "genero" => "fantasia"
    ],
    [
        "titulo" => "El gigante de hierro",
        "año" => 1999,
        "director" => "X",
        "genero" => "animacion"
    ],
    [
        "titulo" => "Alien",
        "año" => 1979,
        "director" => "Ridley Scott",
        "genero" => "Sci-Fi"
    ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        main {
            max-width: 900px;
            margin: auto;
        }

        #peliculas {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .card {
            padding: 1rem;
            box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3);
            flex: 1;
            min-width: 270px;
        }
    </style>
</head>

<body>

    <main>
        <h1>Netflix</h1>

        <section id="peliculas">
            <?php foreach ($netflix as $peli) { ?>
                <div class="card">
                    <h2> <?= $peli['titulo'] ?> <span><?= $peli['año'] ?></span></h2>
                    <p>Directed by: <?= $peli['director'] ?></p>
                    <p>Género: <?= $peli['genero'] ?></p>
                </div>
            <?php } ?>
        </section>

    </main>
</body>

</html>