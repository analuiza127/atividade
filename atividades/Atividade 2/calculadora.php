<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obter valores do formulário
        $comprimento = $_POST["comprimento"];
        $largura = $_POST["largura"];

        // Validar se os valores são numéricos
        if (is_numeric($comprimento) && is_numeric($largura)) {
            // Calcular área e perímetro
            $area = $comprimento * $largura;
            $perimetro = 2 * ($comprimento + $largura);

            // Exibir resultados
            echo "<p>Área do retângulo: $area</p>";
            echo "<p>Perímetro do retângulo: $perimetro</p>";
        } else {
            echo "<p>Por favor, insira valores numéricos válidos.</p>";
        }
    } else {
        echo "<p>Erro: Este script PHP deve ser acessado via método POST.</p>";
    }
    ?>
</body>
</html>
