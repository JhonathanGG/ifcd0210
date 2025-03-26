<?php
// comprobar si los valores recibidos del formulario coinciden con los siguientes:
$usuario = 'admin';
$password = '$uper$ecr3t';
// si coinciden, redirigir a la página de bienvenida
// sino, redirigir a la página de error
// pista: la función header('Location: nombre_del_fichero.extension') sirve para redirigir
if ($usuario === $_POST['usuario'] && $password === $POST['password']) {
    header("Location: bienvenida.php?usuario = $_POST[usuario]");   
} else {
    header("Location: error.html");    
}
?>