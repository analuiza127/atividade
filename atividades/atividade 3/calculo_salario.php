<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Salário</title>
</head>
<body>
    <h2>Resultado do Salário</h2>
    
    <?php
    // Verifica se os dados foram submetidos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores do formulário
        $ganhoPorHora = floatval($_POST["ganhoPorHora"]);
        $horasTrabalhadas = floatval($_POST["horasTrabalhadas"]);
        
        // Calcula o salário bruto
        $salarioBruto = $ganhoPorHora * $horasTrabalhadas;
        
        // Calcula os descontos
        $ir = 0.11 * $salarioBruto;
        $inss = 0.08 * $salarioBruto;
        $sindicato = 0.05 * $salarioBruto;
        
        // Calcula o salário líquido
        $salarioLiquido = $salarioBruto - ($ir + $inss + $sindicato);
        
        // Exibe os resultados
        echo "<p>Salário Bruto: R$ $salarioBruto</p>";
        echo "<p>IR (11%): R$ $ir</p>";
        echo "<p>INSS (8%): R$ $inss</p>";
        echo "<p>Sindicato (5%): R$ $sindicato</p>";
        echo "<p>Salário Líquido: R$ $salarioLiquido</p>";
    }
    ?>
    
</body>
</html>
