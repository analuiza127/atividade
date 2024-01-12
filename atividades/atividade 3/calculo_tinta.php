<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Calculadora de Tinta</title>
</head>
<body>
    <h2>Resultado da Calculadora de Tinta</h2>
    
    <?php
    // Verifica se os dados foram submetidos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor da área a ser pintada
        $areaPintada = floatval($_POST["areaPintada"]);
        
        // Calcula a quantidade de tinta necessária considerando 10% de folga
        $quantidadeTinta = $areaPintada * 1.1 / 6;
        
        // Calcula a quantidade de latas e galões necessários
        $quantidadeLatas = ceil($quantidadeTinta / 18);
        $quantidadeGaloes = ceil($quantidadeTinta / 3.6);
        
        // Calcula os preços em diferentes cenários
        $precoApenasLatas = $quantidadeLatas * 80;
        $precoApenasGaloes = $quantidadeGaloes * 25;
        
        // Mistura latas e galões para obter o menor preço
        $quantidadeLatasMisturadas = floor($quantidadeTinta / 18);
        $restoTinta = fmod($quantidadeTinta, 18);
        $quantidadeGaloesMisturados = ceil($restoTinta / 3.6);
        
        $precoMisturado = ($quantidadeLatasMisturadas * 80) + ($quantidadeGaloesMisturados * 25);
        
        // Exibe os resultados
        echo "<p>Quantidade de tinta necessária: $quantidadeTinta litros</p>";
        echo "<p>Comprar apenas latas de 18 litros: $quantidadeLatas latas, Preço: R$ $precoApenasLatas</p>";
        echo "<p>Comprar apenas galões de 3,6 litros: $quantidadeGaloes galões, Preço: R$ $precoApenasGaloes</p>";
        echo "<p>Misturar latas e galões: $quantidadeLatasMisturadas latas e $quantidadeGaloesMisturados galões, Preço: R$ $precoMisturado</p>";
    }
    ?>
    
</body>
</html>
