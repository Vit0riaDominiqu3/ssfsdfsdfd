<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <?php

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        if ($peso > 0 && $altura > 0){

        $imc = $peso / ($altura * $altura);
        
        echo "Seu IMC é: " . number_format($imc, 2);
        
        if ($imc < 18.5) {
            echo "<br> Você está abaixo do peso.";
        }
        else if ($imc >= 18.5 && $imc < 24.9) {
            echo "<br> Seu peso está saudável.";
        }
        else if ($imc >= 25 && $imc < 29.9) {
            echo "<br> Você está com sobrepeso.";
        }
        else {
            echo "<br> Você está obeso.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
    ?>
    <br><br>
    <a href="front.php">Calcular novamente</a>
</body>
</html>
