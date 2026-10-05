<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

<h1>Calculadora</h1>

<form method="post">
    Numero 1:
    <input type="text" name="numero1">

    <br><br>

    Numero 2:
    <input type="text" name="numero2">

    <br><br>

    <input type="submit" value="Calcular">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if ($numero1 == "" || $numero2 == "") {

        echo "<p>Los dos campos son obligatorios.</p>";

    } elseif (!is_numeric($numero1) || !is_numeric($numero2)) {

        echo "<p>Los dos valores deben ser numeros.</p>";

    } else {

        $numero1 = (float)$numero1;
        $numero2 = (float)$numero2;

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Operacion</th>";
        echo "<th>Resultado</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Suma</td>";
        echo "<td>" . ($numero1 + $numero2) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Resta</td>";
        echo "<td>" . ($numero1 - $numero2) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Producto</td>";
        echo "<td>" . ($numero1 * $numero2) . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Division</td>";

        if ($numero2 == 0) {
            echo "<td>No se puede dividir entre cero</td>";
        } else {
            echo "<td>" . ($numero1 / $numero2) . "</td>";
        }

        echo "</tr>";
        echo "</table>";
    }
}

?>
</body>
</html>

