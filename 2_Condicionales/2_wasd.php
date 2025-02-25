<?php

$teclapulsada = 'T';

switch ($teclapulsada) {
    case 'w': echo "adelante";
            break;
    case 'a': echo "izquierda";
            break;
    case 's': echo "abajo";
            break;
    case 'd': echo "derecha";
            break;
    
    default:
        echo "tecla invalida"
        break;
}
?>