<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>

    <?php
        $x = 10;
        $y = 5;
        $z = 2;

        $array = array(
            $x,
            $y,
            $z,
            $x + $y,
            $y * $z,
            $x / $z,
            $x + $y + $z,
            ($y + $z) / $x
        );
    ?>

    <table border="1">
        <tr>
            <th>Posición</th>
            <th>Valor</th>
        </tr>

        <tr>
            <td>0</td>
            <td><?php echo $array[0]; ?></td>
        </tr>

        <tr>
            <td>1</td>
            <td><?php echo $array[1]; ?></td>
        </tr>

        <tr>
            <td>2</td>
            <td><?php echo $array[2]; ?></td>
        </tr>

        <tr>
            <td>3</td>
            <td><?php echo $array[3]; ?></td>
        </tr>

        <tr>
            <td>4</td>
            <td><?php echo $array[4]; ?></td>
        </tr>

        <tr>
            <td>5</td>
            <td><?php echo $array[5]; ?></td>
        </tr>

        <tr>
            <td>6</td>
            <td><?php echo $array[6]; ?></td>
        </tr>

        <tr>
            <td>7</td>
            <td><?php echo $array[7]; ?></td>
        </tr>

    </table>

</body>
</html>