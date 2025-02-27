<?php
$compra=["pan","cafe","agua","leche"];
for ($i=0; $i <count($compra); $i++) { 
    echo($compra[$i])."<br>";
}

foreach ($compra as $producto) {
    echo"<imput type='checkbox'>".$producto."<br>";
}
echo"<hr>";
