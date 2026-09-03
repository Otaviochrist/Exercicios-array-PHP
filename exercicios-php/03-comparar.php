<?php
/**
 * Exercício 03 — Comparar produtos
 *
 * TODO:
 * 1. Qual produto tem o menor preço já visto em qualquer lista? Imprima nome e valor.
 * 2. Qual produto tem a média de preços mais alta? Imprima nome e média.
 *
 * Dicas:
 *   - média = soma dos preços / quantidade de preços (array_sum + count)
 *   - você pode guardar "campeão" em variáveis enquanto percorre o array
 *
 * Esperado (confira na mão antes de considerar pronto):
 *   menor preço global: oleo 5.89
 *   maior média: cafe (calcule)
 */

$produtos = [
    ["nome" => "arroz",  "preco" => [10.00, 12.43, 11.75, 9.99, 10.30]],
    ["nome" => "feijao", "preco" => [8.20, 7.50, 9.10, 7.80]],
    ["nome" => "oleo",   "preco" => [6.40, 5.89, 6.15]],
    ["nome" => "cafe",   "preco" => [18.00, 16.50, 14.90, 15.20]],
];
    $auxMenor = PHP_FLOAT_MAX;
    $produtoMenorPreco = "";

// TODO: menor preço global (nome + valor)
    foreach ($produtos as $produto){
        foreach ($produto["preco"] as $preco){
            if ($preco < $auxMenor) {
                $auxMenor = $preco;
                $produtoMenorPreco = $produto["nome"];
            }
        }
    }
    echo "O produto com menor valor é o " . $produtoMenorPreco . " e o seu preco era de: " . $auxMenor . "\n";

// TODO: produto com maior média (nome + média)
    $auxMaior = 0;
    $produtoMaiorPreco = "";
   foreach ($produtos as $produto ) {
        $media = array_sum($produto["preco"])/ count($produto["preco"]);
     if ($media > $auxMaior) {
        $auxMaior = $media;
        $produtoMaiorPreco = $produto["nome"];
     }
   }
   echo "O maior valor médio de um produto é ". $auxMaior . " esse produto é o " . $produtoMaiorPreco;
