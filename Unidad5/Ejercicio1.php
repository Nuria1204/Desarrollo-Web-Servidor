
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Boletín de notas</title>
</head>
<body>

<?php

function boletin($nombre, $notas) {

    echo "<h2>Boletín de notas</h2>";

    echo "Alumno: " . $nombre . "<br>";

    foreach ($notas as $asignatura => $nota) {
        echo $asignatura . ": " . $nota . "<br>";
    }

}

$nombre = "Juan Ramírez";

$notas = [
    "Matemáticas" => "Sobresaliente",
    "Lengua" => "Notable",
    "Historia" => "Notable",
    "Dibujo" => "Insuficiente"
];

boletin($nombre, $notas);

?>

</body>
</html>
