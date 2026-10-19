
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nota final</title>
</head>
<body>

<?php

function boletinFinal($alumno) {

    $media = ($alumno["nota1"] +
              $alumno["nota2"] +
              $alumno["nota3"]) / 3;

    $html = "<h2>Boletín oficial de notas</h2>";

    $html .= "Nombre: " . $alumno["nombre"] . "<br>";
    $html .= "Apellidos: " . $alumno["apellidos"] . "<br>";
    $html .= "Nota 1: " . $alumno["nota1"] . "<br>";
    $html .= "Nota 2: " . $alumno["nota2"] . "<br>";
    $html .= "Nota 3: " . $alumno["nota3"] . "<br>";

    $html .= "Nota final: " . round($media, 2);

    return $html;

}

$alumno = [
    "nombre" => "Juan",
    "apellidos" => "Ramírez López",
    "nota1" => 7,
    "nota2" => 8,
    "nota3" => 9
];

echo boletinFinal($alumno);

?>

</body>
</html>
