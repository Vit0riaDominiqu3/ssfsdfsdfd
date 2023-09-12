<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Área do Triângulo</title>
</head>
<body>
    <h1>Resultado da Área do Triângulo</h1>
    <?php

    if (isset($_POST['base']) && isset($_POST['altura'])) {

        $base = $_POST['base'];
        $altura = $_POST['altura'];
        
        $area = ($base * $altura) / 2;
        
        echo "A área do triângulo é: " . number_format($area, 2) . " metros quadrados.";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
    ?>
    <br><br>
    <a href="index.html">Calcular novamente</a>
</body>
</html>
