
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla con clases CSS</title>

    <style>
        .rojo {
            background-color: red;
        }

        .amarillo {
            background-color: yellow;
        }

        .azul {
            background-color: lightblue;
        }
    </style>
</head>
<body>

<?php

function tablaClases($clase1, $clase2, $clase3) {

    echo "<table border='1'>";

    echo "<tr class='$clase1'>";
    echo "<td>Fila 1</td>";
    echo "</tr>";

    echo "<tr class='$clase2'>";
    echo "<td>Fila 2</td>";
    echo "</tr>";

    echo "<tr class='$clase3'>";
    echo "<td>Fila 3</td>";
    echo "</tr>";

    echo "</table>";

}

tablaClases("rojo", "amarillo", "azul");

?>

</body>
</html>
