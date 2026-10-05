<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $Kilometros = 300;
        $combustible = 20;

        $consumo = $combustible /$Kilometros;

        echo "Kilometros recorridos: " .$Kilometros . "<br>";
        echo "Combustible gastados: " .$combustible . "litros<br>";
        echo "Consumo medio por kilómetro" . $consumo . "litros/km";

    ?>
</body>
</html>



