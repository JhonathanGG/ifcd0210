

/**
 * 
 * Dado el siguiente array de alumnos, realizar las siguientes funciones:
 * 
 * - Mostrar nombres: función que recibe el array y "pinta" un html con todos los nombres, notas y curso de los alumnos
 * - Filtrar alumnos: funcion que recibe el array y un curso, y devuelve otro array con todos los alumnos que cumplen el criterio
 * - Mostrar nota media: función que recibe un array de alumnos y devuelve la nota media
 */


<?php

// Array de alumnos
$alumnos = [
    ["nombre" => "Juan Pérez", "nota" => 8.5, "curso" => "1º"],
    ["nombre" => "María López", "nota" => 9.2, "curso" => "2º"],
    ["nombre" => "Carlos Sánchez", "nota" => 7.8, "curso" => "1º"],
    ["nombre" => "Ana Torres", "nota" => 8.9, "curso" => "2º"],
    ["nombre" => "Luis Fernández", "nota" => 6.5, "curso" => "1º"],
    ["nombre" => "Sofía Ramírez", "nota" => 9.0, "curso" => "2º"],
    ["nombre" => "Pedro Gómez", "nota" => 7.3, "curso" => "1º"],
    ["nombre" => "Elena Duarte", "nota" => 8.7, "curso" => "2º"]
];

// Función para mostrar nombres, notas y curso
function mostrarAlumnos($alumnos) {
    echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Nota</th>
                <th>Curso</th>
            </tr>";
    foreach ($alumnos as $alumno) {
        echo "<tr>
                <td>{$alumno['nombre']}</td>
                <td>{$alumno['nota']}</td>
                <td>{$alumno['curso']}</td>
              </tr>";
    }
    echo "</table>";
}

// Función para filtrar alumnos por curso
function filtrarAlumnosPorCurso($alumnos, $curso) {
    $alumnosFiltrados = [];
    foreach ($alumnos as $alumno) {
        if ($alumno['curso'] === $curso) {
            $alumnosFiltrados[] = $alumno;
        }
    }
    return $alumnosFiltrados;
}

// Función para calcular la nota media
function calcularNotaMedia($alumnos) {
    $totalNotas = 0;
    $cantidadAlumnos = count($alumnos);
    
    foreach ($alumnos as $alumno) {
        $totalNotas += $alumno['nota'];
    }
    
    return $cantidadAlumnos > 0 ? $totalNotas / $cantidadAlumnos : 0;
}

// Ejemplo de uso

// Mostrar todos los alumnos
mostrarAlumnos($alumnos);

// Filtrar alumnos del curso "1º"
$alumnosCurso1 = filtrarAlumnosPorCurso($alumnos, "1º");
echo "<h3>Alumnos de 1º</h3>";
mostrarAlumnos($alumnosCurso1);

// Filtrar alumnos del curso "2º"
$alumnosCurso2 = filtrarAlumnosPorCurso($alumnos, "2º");
echo "<h3>Alumnos de 2º</h3>";
mostrarAlumnos($alumnosCurso2);

// Calcular la nota media
$notaMedia = calcularNotaMedia($alumnos);
echo "<h3>La nota media de todos los alumnos es: " . number_format($notaMedia, 2) . "</h3>";

?>
