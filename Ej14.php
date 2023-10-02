<?php

    $respuestas = [
        "Sí",
        "No",
        "Quizás",
        "Claro que sí",
        "Por supuesto que no",
        "No lo tengo claro",
        "Seguro",
        "Yo diría que sí",
        "Ni de coña",
    ];

    if (isset($_POST["pregunta"])) {
        $pregunta = $_POST["pregunta"];
        $respuesta = $respuestas[array_rand($respuestas)]; 
        echo "<p><strong>Tu pregunta:</strong> $pregunta</p>";
        echo "<p><strong>Respuesta:</strong> $respuesta</p>";
    } else {
        echo "No se proporcionó una pregunta válida.";
    }



?>