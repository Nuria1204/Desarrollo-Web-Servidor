<!DOCTYPE html>
<html>
<head>
    <title>Tablas de multiplicar</title>

    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>

<?php

for ($tabla = 1; $tabla <= 10; $tabla++) {

    echo "<table>";

    for ($i = 1; $i <= 10; $i++) {

        $resultado = $tabla * $i;

        echo "<tr>";
        echo "<td>$tabla x $i</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }

    echo "</table>";
}

?>

</body>
</html>