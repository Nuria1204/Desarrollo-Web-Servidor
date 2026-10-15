<?php

$alumnos = [
    "Antonio" => [
        "Matematicas" => 5,
        "Lengua" => 8.3,
        "Ciencias" => 9,
        "Geografia" => 7
    ],

    "Ana" => [
        "Matematicas" => 8,
        "Lengua" => 7,
        "Ciencias" => 4.5,
        "Geografia" => 9
    ],

    "Benito" => [
        "Matematicas" => 9,
        "Lengua" => 6.75,
        "Ciencias" => 9,
        "Geografia" => 3.1
    ],

    "Carla" => [
        "Matematicas" => 7,
        "Lengua" => 8,
        "Ciencias" => 6,
        "Geografia" => 9
    ],

    "David" => [
        "Matematicas" => 6,
        "Lengua" => 7,
        "Ciencias" => 8,
        "Geografia" => 5
    ]
];

echo "<h2>Notas de los alumnos</h2>";

echo "<table border='1'>";
echo "<tr>
        <th>Alumno</th>
        <th>Matemáticas</th>
        <th>Lengua</th>
        <th>Ciencias Naturales</th>
        <th>Geografía</th>
        <th>Media</th>
      </tr>";

foreach ($alumnos as $nombre => $notas) {

    $media = array_sum($notas) / 4;

    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>" . $notas["Matematicas"] . "</td>";
    echo "<td>" . $notas["Lengua"] . "</td>";
    echo "<td>" . $notas["Ciencias"] . "</td>";
    echo "<td>" . $notas["Geografia"] . "</td>";
    echo "<td>" . number_format($media, 3, ',', '') . "</td>";
    echo "</tr>";
}

echo "</table>";

$nombreBuscado = "Antonio";

echo "<h2>Notas del alumno $nombreBuscado</h2>";

if (isset($alumnos[$nombreBuscado])) {

    foreach ($alumnos[$nombreBuscado] as $asignatura => $nota) {
        echo "$asignatura: $nota<br>";
    }

    $media = array_sum($alumnos[$nombreBuscado]) / 4;

    echo "Media: " . number_format($media, 3, ',', '');

} else {
    echo "El alumno no existe";
}

?>