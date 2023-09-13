<h1>Resultado do calculo da Área do Triângulo</h1>


<?php

$base = ($_POST['base']);
$altura = ($_POST['altura']);
$area = ($base * $altura) / 2;


echo "A área calculada do triângulo em metros quadrados é: $area";

?>