<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Notas de alumnos</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>

<?php

$alumnos = [
    "Ana" => 4,
    "Luis" => 5,
    "María" => 6,
    "Carlos" => 7,
    "Laura" => 8,
    "Pedro" => 9,
    "Sofía" => 10
];

echo "<table>";

echo "<tr>";
echo "<th>Alumno</th>";
echo "<th>Nota</th>";
echo "<th>Calificación</th>";
echo "</tr>";

foreach ($alumnos as $nombre => $nota) {

    if ($nota >= 0 && $nota <= 4) {
        $calificacion = "Suspenso";
    } elseif ($nota == 5) {
        $calificacion = "Aprobado";
    } elseif ($nota == 6) {
        $calificacion = "Bien";
    } elseif ($nota == 7 || $nota == 8) {
        $calificacion = "Notable";
    } elseif ($nota == 9) {
        $calificacion = "Sobresaliente";
    } elseif ($nota == 10) {
        $calificacion = "Matrícula de honor";
    }

    echo "<tr>";
    echo "<td>$nombre</td>";
    echo "<td>$nota</td>";
    echo "<td>$calificacion</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>