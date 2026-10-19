
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla de colores</title>
</head>
<body>

<?php

function tablaColores($color1, $color2, $color3) {

    echo "<table border='1'>";

    echo "<tr style='background-color: $color1'>";
    echo "<td>Fila 1</td>";
    echo "</tr>";

    echo "<tr style='background-color: $color2'>";
    echo "<td>Fila 2</td>";
    echo "</tr>";

    echo "<tr style='background-color: $color3'>";
    echo "<td>Fila 3</td>";
    echo "</tr>";

    echo "</table>";

}

tablaColores("red", "yellow", "lightblue");

?>

</body>
</html>
