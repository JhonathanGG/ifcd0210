
    //1) Leer contenido de compra.json ->file_get_contents('ruta_al_fichero') 
    //tip: igualar una variable a la función para guardar el texto en dicha variable

    //2) Convertir el contenido(string) a un array que pueda iterar -> json_decode($texto_del_json, true)

    //3) Iterar el array renderizando (pintando) el html pertinente 




<?php

function mostrarLista() {
    // 1) Leer el contenido del archivo compra.json
    $jsonContent = file_get_contents('compra.json');  
    // 2) Convertir el contenido (string) a un array asociativo
    $comprasArray = json_decode($jsonContent, true);

    // 3) Iterar sobre el array y renderizar el HTML
    if (is_array($comprasArray)) {
        foreach ($comprasArray as $compra) {
            echo "<div>";
            echo "<h2>Producto: " . htmlspecialchars($compra['producto']) . "</h2>";
            echo "<p>Cantidad: " . htmlspecialchars($compra['cantidad']) . "</p>";
            echo "<p>Precio: $" . htmlspecialchars($compra['precio']) . "</p>";
            echo "<p>Total: $" . htmlspecialchars($compra['total']) . "</p>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>No hay compras disponibles.</p>";
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

<h1>Lista de Compras</h1>

<?php

mostrarLista();
?>

</body>

</html>