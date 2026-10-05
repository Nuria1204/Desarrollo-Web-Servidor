<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Números</title>

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

$numeros = [3, 8, 7, -6];

echo "<table>";

echo "<tr>";
echo "<th>Número</th>";
echo "<th>Cuadrado</th>";
echo "<th>Cubo</th>";
echo "</tr>";

foreach ($numeros as $numero) {

    $cuadrado = $numero * $numero;
    $cubo = $numero * $numero * $numero;

    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td>$cuadrado</td>";
    echo "<td>$cubo</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>