<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <?php
    if (isset($_POST['peso']) && isset($_POST['altura'])) {

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        
        $imc = $peso / ($altura * $altura);
        
        echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
        
        if ($imc < 18.5) {
            echo "Você está abaixo do peso.";
        } else if ($imc >= 18.5 && $imc < 24.9) {
            echo "Seu peso está saudável.";
        } else if ($imc >= 25 && $imc < 29.9) {
            echo "Você está com sobrepeso.";
        } else {
            echo "Você está obeso.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
    ?>
    <br><br>
    <a href="index.html">Calcular novamente</a>
</body>
</html>
