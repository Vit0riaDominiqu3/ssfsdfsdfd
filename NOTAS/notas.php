<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo "A média das notas é " . $media; 


if($media < 5)
{
    echo "  e sua menção é I";
}

else if($media >= 5 && $media < 7)
{
    echo " e sua menção é R";
}

else if($media >= 7 && $media < 9)
{
    echo " e sua menção é B";
}

else 
{
    echo " e sua menção é MB";
}
?>