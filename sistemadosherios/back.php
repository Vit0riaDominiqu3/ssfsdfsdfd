<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="t">
    <h1>Resultados</h1>

    <?php
        
        $varHeroi = $_POST["heroi"];
        $varUniverso = $_POST["universo"];
        $varQtd_heroi = $_POST["qtd_heroi"];

        if($varUniverso == "marvel")
        {
            if($varHeroi == "hulk"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/hulk.jpg' width= '500px'>";
            }}

            else if($varHeroi == "capitao"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/capitao.jpg'>";
            }}

            else if($varHeroi == "homem aranha"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/aranha.jpg'>";  
            }}

            else if($varHeroi == "thor"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/thor.jpg'>";
            }}

            else if($varHeroi== "arqueiro"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/arqueiro.jpg'>";     
            }}

            else if($varHeroi == "homem de ferro"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/ferro.jpg'>";     
            }}

            else if($varHeroi == "wanda"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/wanda.jpg'>";     
            }}

            else if($varHeroi == "doutor estranho"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/estranho.webp'>";     
            }}

            else if($varHeroi == "pantera negra"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/negra.webp'>";     
            }}
            
            else if($varHeroi == "chang chi"){
                for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/chi.jpg'>";     
            }}
        }
        else if($varUniverso == "dc"){
    
        if ($varHeroi == "batman"){
            for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/batman.jpg'>";  
        }}

        else if($heroi == "lanterna verde"){
            for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/lanterna.webp'>";
        }}

        else if($heroi == "mulher maravilha"){
            for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/mulhermaravilha.jpg'>";
        }}

        else if($heroi == "superman"){
            for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/super man.webp'>";
        }}

        else if($heroi == "adao negro"){
            for($x=1;$x<=$varQtd_heroi;$x++){
            echo "O Heroi escolhido é $varHeroi!<br><img src='imgs/adaonegro.jpg'>";
        }}
        
        else
        {
            echo "Heroi inexistente!";
        }}

    ?>



</body>
</html>