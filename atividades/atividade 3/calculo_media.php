<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora de Média</title>
</head>
<body>
    <h2>Resultado da Calculadora de Média</h2>
    
    <?php
    // Verifica se os dados foram submetidos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém as notas do formulário
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
        $nota3 = floatval($_POST["nota3"]);
        
        // Calcula a média geral
        $mediaGeral = ($nota1 + $nota2 + $nota3) / 3;
        
        // Exibe as notas e a média geral
        echo "<p>N1 = $nota1 | N2 = $nota2 | N3 = $nota3 | MG = $mediaGeral</p>";
        
        // Verifica se o aluno foi aprovado ou reprovado
        if ($mediaGeral >= 6) {
            echo "<p>Aprovado</p>";
        } else {
            echo "<p>Reprovado</p>";
        }
    }
    ?>
    
</body>
</html>
