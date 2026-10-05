<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>

    <?php
        $mascota = array(
            "nombre" => "Luna",
            "familia" => "Perro",
            "raza" => "Labrador",
            "color" => "Marrón",
            "peso" => 25,
            "altura" => 55,
            "edad" => 4
        );
    ?>

    <table border="1">

        <tr>
            <th>Dato</th>
            <th>Valor</th>
        </tr>

        <tr>
            <td>Nombre</td>
            <td><?php echo $mascota["nombre"]; ?></td>
        </tr>

        <tr>
            <td>Familia</td>
            <td><?php echo $mascota["familia"]; ?></td>
        </tr>

        <tr>
            <td>Raza</td>
            <td><?php echo $mascota["raza"]; ?></td>
        </tr>

        <tr>
            <td>Color</td>
            <td><?php echo $mascota["color"]; ?></td>
        </tr>

        <tr>
            <td>Peso</td>
            <td><?php echo $mascota["peso"]; ?> kg</td>
        </tr>

        <tr>
            <td>Altura</td>
            <td><?php echo $mascota["altura"]; ?> cm</td>
        </tr>

        <tr>
            <td>Edad</td>
            <td><?php echo $mascota["edad"]; ?> años</td>
        </tr>

    </table>

</body>
</html>