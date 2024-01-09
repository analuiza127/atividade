<?php
$livrosProf = ["123", "321", "213"];
$livrosAluno = ["456", "654", "546"];

$lerLivro = readline("Digite a id do livro: ");

foreach ($livrosProf as $livro) {
    if ($livro == $lerLivro) {
        echo "Livro $lerLivro encontrado voce tem 10 dias para entregar.";
        return;
    }
}

foreach ($livrosAluno as $livro) {
    if ($livro == $lerLivro) {
        echo "Livro $lerLivro encontrado voce tem 3 dias para entregar.";
        return;
    }
}


echo "Livro $lerLivro não encontrado";
?>
