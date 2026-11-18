<?php

$preguntas = array(

    array(
        "pregunta" => "¿En qué país se encuentra la Torre Eiffel?",
        "respuestas" => array("Italia", "Francia", "Alemania", "Reino Unido"),
        "correcta" => 1
    ),

    array(
        "pregunta" => "¿Quién pintó la Mona Lisa?",
        "respuestas" => array("Vincent van Gogh", "Pablo Picasso", "Leonardo da Vinci", "Claude Monet"),
        "correcta" => 2
    ),

    array(
        "pregunta" => "¿En qué año comenzó la Segunda Guerra Mundial?",
        "respuestas" => array("1914", "1939", "1945", "1918"),
        "correcta" => 1
    ),

    array(
        "pregunta" => "¿Qué civilización construyó las pirámides de Guiza?",
        "respuestas" => array("Romana", "Griega", "Egipcia", "Maya"),
        "correcta" => 2
    ),

    array(
        "pregunta" => "¿Quién pintó el cuadro Guernica?",
        "respuestas" => array("Salvador Dalí", "Pablo Picasso", "Goya", "Velázquez"),
        "correcta" => 1
    ),

    array(
        "pregunta" => "¿En qué ciudad se encuentra el Coliseo?",
        "respuestas" => array("Atenas", "París", "Roma", "Londres"),
        "correcta" => 2
    ),

    array(
        "pregunta" => "¿Quién esculpió el David del Renacimiento?",
        "respuestas" => array("Miguel Ángel", "Donatello", "Bernini", "Leonardo da Vinci"),
        "correcta" => 0
    ),

    array(
        "pregunta" => "¿Qué movimiento artístico utiliza formas geométricas y fragmenta las figuras?",
        "respuestas" => array("Impresionismo", "Cubismo", "Barroco", "Romanticismo"),
        "correcta" => 1
    ),

    array(
        "pregunta" => "¿Quién fue el primer emperador romano?",
        "respuestas" => array("Julio César", "Nerón", "Augusto", "Trajano"),
        "correcta" => 2
    ),

    array(
        "pregunta" => "¿En qué país nació Vincent van Gogh?",
        "respuestas" => array("Francia", "Italia", "Bélgica", "Países Bajos"),
        "correcta" => 3
    )

);

function mostrarPreguntas($preguntas) {

    foreach ($preguntas as $numero => $pregunta) {

        ?>

        <div class="pregunta">

            <h3>
                <?php echo ($numero + 1) . ". " . $pregunta["pregunta"]; ?>
            </h3>

            <div class="respuestas">

                <?php foreach ($pregunta["respuestas"] as $indice => $respuesta) { ?>

                    <label>
                        <input type="radio"
                               name="respuestas[<?php echo $numero; ?>]"
                               value="<?php echo $indice; ?>">

                        <?php echo $respuesta; ?>
                    </label>

                <?php } ?>

            </div>

        </div>

        <?php
    }

}

?>
