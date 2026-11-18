<?php

require_once 'funciones.php';

$aciertos = 0;
$mostrarResultado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mostrarResultado = true;

    $respuestasUsuario = isset($_POST["respuestas"]) ? $_POST["respuestas"] : array();

    foreach ($preguntas as $numero => $pregunta) {

        if (isset($respuestasUsuario[$numero])) {

            if ($respuestasUsuario[$numero] == $pregunta["correcta"]) {
                $aciertos++;
            }

        }

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>El Rincón de la Historia y del Arte</title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header>

        <h1>El Rincón de la Historia y del Arte</h1>

        <p>Descubre cuánto sabes sobre Historia y Arte</p>

    </header>


    <main class="contenedor">

        <section class="introduccion">

            <h2>Test de conocimientos</h2>

            <p>
                Pon a prueba tus conocimientos sobre Historia y Arte
                con este test de 10 preguntas.
            </p>

            <p>
                Selecciona la respuesta correcta en cada caso
                y descubre tu resultado.
            </p>

        </section>


        <form method="POST" action="index.php">

            <?php mostrarPreguntas($preguntas); ?>

            <button type="submit">Corregir </button>

        </form>


        <?php if ($mostrarResultado) { ?>

            <section class="resultado">

                <h2>¡Tu resultado!</h2>

                <p>
                    Has acertado
                    <?php echo $aciertos; ?>
                    de
                    <?php echo count($preguntas); ?>
                    preguntas.
                </p>

                <p>
                    Tu puntuación es:
                    <?php echo ($aciertos / count($preguntas)) * 10; ?>
                    sobre 10.
                </p>

            </section>

        <?php } ?>

    </main>

</body>

</html>
