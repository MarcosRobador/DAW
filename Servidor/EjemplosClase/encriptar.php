<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST['texto'];
    $desplazamiento = $_POST['desplazamiento'];

    function cifradoCesar($texto, $desplazamiento) {
        $resultado = '';
        $longitudTexto = strlen($texto);

        for ($i = 0; $i < $longitudTexto; $i++) {
            $char = $texto[$i];

            if (ctype_alpha($char)) {
                $min = ctype_lower($char) ? 'a' : 'A';
                $char = chr((ord($char) + $desplazamiento - ord($min)) % 26 + ord($min));
            }

            $resultado .= $char;
        }

        return $resultado;
    }

    $textoCifrado = cifradoCesar($texto, $desplazamiento);
    echo "Texto cifrado: " . $textoCifrado;
}
?>