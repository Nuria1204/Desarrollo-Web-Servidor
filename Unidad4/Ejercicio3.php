<?php

$mascotas = [
    0 => [
        "nombre" => "Pepe",
        "peso" => 4.5,
        "color" => "Marrón",
        "edad" => 12
    ],

    1 => [
        "nombre" => "Sparky",
        "peso" => 3,
        "color" => "Blanco",
        "edad" => 2
    ],

    2 => [
        "nombre" => "Tobby",
        "peso" => 7.2,
        "color" => "Beige",
        "edad" => 8
    ],

    3 => [
        "nombre" => "Bigotes",
        "peso" => 4,
        "color" => "Negro",
        "edad" => 9
    ],

    4 => [
        "nombre" => "Ricky",
        "peso" => 0.1,
        "color" => "Verde",
        "edad" => 2
    ]
];

echo "<h2>Todas las mascotas</h2>";

foreach ($mascotas as $codigo => $mascota) {
    echo "Código: $codigo<br>";
    echo "Nombre: " . $mascota["nombre"] . "<br>";
    echo "Peso: " . $mascota["peso"] . "<br>";
    echo "Color: " . $mascota["color"] . "<br>";
    echo "Edad: " . $mascota["edad"] . "<br><br>";
}

echo "<h2>Peso de la mascota con código 3</h2>";

echo $mascotas[3]["peso"] . " kg";

echo "<h2>Color de Sparky</h2>";

echo $mascotas[1]["color"];

$mascotaMayor = $mascotas[0];

foreach ($mascotas as $mascota) {
    if ($mascota["edad"] > $mascotaMayor["edad"]) {
        $mascotaMayor = $mascota;
    }
}

echo "<h2>Mascota más mayor</h2>";

echo "Nombre: " . $mascotaMayor["nombre"] . "<br>";
echo "Peso: " . $mascotaMayor["peso"] . "<br>";
echo "Color: " . $mascotaMayor["color"] . "<br>";
echo "Edad: " . $mascotaMayor["edad"] . "<br>";

$mascotaMenorPeso = $mascotas[0];

foreach ($mascotas as $mascota) {
    if ($mascota["peso"] < $mascotaMenorPeso["peso"]) {
        $mascotaMenorPeso = $mascota;
    }
}

echo "<h2>Mascota que menos pesa</h2>";

echo $mascotaMenorPeso["nombre"];

?>
