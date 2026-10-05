<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calendario</title>

    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .mes {
            background-color: lightblue;
        }
    </style>
</head>

<body>

<?php

$meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
];

$diasSemana = [
    "Lunes",
    "Martes",
    "Miércoles",
    "Jueves",
    "Viernes",
    "Sábado",
    "Domingo"
];

$diasMes = [
    31,
    28,
    31,
    30,
    31,
    30,
    31,
    31,
    30,
    31,
    30,
    31
];

$diaSemana = 0;

for ($mes = 0; $mes < 12; $mes++) {

    echo "<table>";

    echo "<tr>";
    echo "<th class='mes' colspan='7'>";
    echo $meses[$mes];
    echo "</th>";
    echo "</tr>";

    echo "<tr>";

    foreach ($diasSemana as $dia) {
        echo "<th>$dia</th>";
    }

    echo "</tr>";

    echo "<tr>";

    for ($i = 0; $i < $diaSemana; $i++) {
        echo "<td></td>";
    }

    for ($dia = 1; $dia <= $diasMes[$mes]; $dia++) {

        echo "<td>$dia</td>";

        $diaSemana++;

        if ($diaSemana == 7) {
            $diaSemana = 0;
            echo "</tr>";

            if ($dia < $diasMes[$mes]) {
                echo "<tr>";
            }
        }
    }

    if ($diaSemana != 0) {

        for ($i = $diaSemana; $i < 7; $i++) {
            echo "<td></td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

?>

</body>
</html>