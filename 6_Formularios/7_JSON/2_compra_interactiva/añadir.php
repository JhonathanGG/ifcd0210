

// Sacar el producto y el precio de $_POST

// Sacar el contenido de compra.json (es un string)

// Convertir el contenido de compra.json de string a un array  (json_decode(...))

// Hacer push a dicho array del objeto que contiene el producto y el precio (ojo: respetar la misma estructura que cada objeto del json)

// Reconvertir el fichero a string (json_enconde())

// Introducir el texto en el fichero compra.json -> esto no va a funcionar si todos los ficheros de la carpeta tienen permisos de lectura y escritura (buscar en google)
<?php

// 1. Sacar el producto y el precio de $_POST
$product = $_POST['producto']; // El nombre del producto desde el formulario
$price = $_POST['precio'];     // El precio del producto desde el formulario

// 2. Sacar el contenido de compra.json (es un string)
$jsonContent = file_get_contents('compra.json');

// 3. Convertir el contenido de compra.json de string a un array (json_decode(...))
$compras = json_decode($jsonContent, true);

// 4. Crear el objeto que contiene el producto y el precio
// Asegúrate de mantener la misma estructura que los objetos existentes en el JSON
$newPurchase = [
    'producto' => $product,
    'precio' => $price
];

// 5. Hacer push a dicho array del objeto que contiene el producto y el precio
$compras[] = $newPurchase;

// 6. Reconvertir el array de vuelta a string (json_encode())
$newJsonContent = json_encode($compras, JSON_PRETTY_PRINT);

// 7. Introducir el texto en el fichero compra.json
// Asegúrate de que el archivo compra.json tenga permisos de escritura en el servidor
file_put_contents('compra.json', $newJsonContent);

?>
