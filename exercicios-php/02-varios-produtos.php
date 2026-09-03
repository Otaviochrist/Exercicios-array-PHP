<?php
/**
 * Exercício 02 — Vários produtos
 *
 * TODO:
 * Percorra $produtos e imprima uma linha por produto com o nome e o menor preço.
 * Use o método que preferir (sort em uma cópia, min(), etc.).
 *
 * Esperado (ordem dos produtos, valores aproximados):
 *   arroz: 9.99
 *   feijao: 7.50
 *   oleo: 5.89
 *   cafe: 14.90
 */

$produtos = [
    ["nome" => "arroz",  "preco" => [10.00, 12.43, 11.75, 9.99, 10.30]],
    ["nome" => "feijao", "preco" => [8.20, 7.50, 9.10, 7.80]],
    ["nome" => "oleo",   "preco" => [6.40, 5.89, 6.15]],
    ["nome" => "cafe",   "preco" => [18.00, 16.50, 14.90, 15.20]],
];

// TODO: seu código
foreach ($produtos as $produto) {
    $menorValor = $produto["preco"];
    sort($menorValor);
    echo ("O menor valor do produto: " . $produto["nome"] . " é " . $menorValor[0] . "\n");
}
