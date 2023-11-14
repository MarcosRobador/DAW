<!DOCTYPE html>
<html>
<head>
    <title>Cifrado César en PHP</title>
</head>
<body>
    <form action="lol.php" method="post">
        <label for="texto">Texto:</label><br>
        <input type="text" id="texto" name="texto"><br>
        <label for="desplazamiento">Desplazamiento:</label><br>
        <input type="number" id="desplazamiento" name="desplazamiento"><br><br>
        <input type="submit" value="Cifrar">
    </form>
</body>
</html>
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