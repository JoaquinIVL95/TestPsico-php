<?php

    include 'header.php';
    include 'procesarRespuesta.php';

?>

<section>
    <div class="contenedor">
        <div class="form-contenedor">

        <h2 class="titulo-form">Formulario test Emiliano Murcia</h2>

        <form action="procesarRespuesta" method="post">
        <?php
        $preguntas = array(
            "¿Qué tan seguido practicas deporte?",
            "¿Te gusta cocinar?",
            // Añadir aquí las demás preguntas...
            "¿Qué tan a menudo te comunicas con tus amigos?"
        );

        $opciones = array(
            array("Nunca" => 1, "A veces" => 2, "Tal vez" => 3, "Puede ser" => 4, "Siempre" => 5),
            array("Nunca" => 1, "A veces" => 2, "Tal vez" => 3, "Puede ser" => 4, "Siempre" => 5),
            array("Nunca" => 1, "A veces" => 2, "Tal vez" => 3, "Puede ser" => 4, "Siempre" => 5),
            // Asigna valores numéricos a las respuestas de cada pregunta
            // Añade más arrays de opciones para cada pregunta aquí
        );

        foreach ($preguntas as $indice => $pregunta) {
            echo "<p>{$pregunta}</p>";
            foreach ($opciones[$indice] as $opcion => $valor) {
                echo "<label><input type='radio' name='respuesta{$indice}' value='{$valor}'>{$opcion}</label><br>";
            }
            echo "<br>";
        }
        ?>

            <label for="mensaje">Deje su solicitud: </label>
            <!-- <textarea type="text" id="mensaje" oninput="ajustarLabel(this)" name="mensaje" required></textarea><br> -->
            
            <input type="submit" value="Enviar">
        </form>

        <!-- <script>
            function ajustarLabel(textarea) {
            var label = textarea.previousElementSibling;
            label.style.height = textarea.scrollHeight + 'px';
        }
        </script> -->





        </div>
    



    </div>


</section>















<?php

    include 'footer.php';

?>
