<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Equação de Bhaskara</title>
</head>
<body>
    <h1>Resultado da Equação de Bhaskara</h1>

    <?php

    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $delta = ($b * $b) - (4 * $a * $c);

        if ($delta > 0) {
 
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Duas raízes reais distintas:<br>";
            echo "x1 = $x1<br>";
            echo "x2 = $x2<br>";
        }
        elseif ($delta == 0) {

            $x1 = -$b / (2 * $a);
            echo "Uma raiz real (raiz dupla):<br>";
            echo "x1 = $x1<br>";
        }
        else {
        
            echo "Sem raízes reais.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
    ?>

    <br>
    <a href="front.php">Voltar</a>
</body>
</html>
