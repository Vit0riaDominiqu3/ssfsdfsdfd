<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Área do Triângulo</title>
</head>
<body>
    <h1>Calculadora de Área do Triângulo</h1>
    <form action="calcular_area.php" method="post">
        <label for="base">Base do Triângulo (em metros):</label>
        <input type="number" name="base" required><br><br>
        
        <label for="altura">Altura do Triângulo (em metros):</label>
        <input type="number" name="altura" step="0.01" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
