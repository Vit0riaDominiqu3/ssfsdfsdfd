<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form action="calcular_imc.php" method="post">
        <label for="peso">Peso (em kg):</label>
        <input type="number" name="peso" required><br><br>
        
        <label for="altura">Altura (em metros):</label>
        <input type="number" name="altura" step="0.01" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

