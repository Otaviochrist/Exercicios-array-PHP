<?php
/**
 * Exercício 07 — Ordenar
 *
 * TODO:
 * Use usort para ordenar $produtos do mais barato ao mais caro,
 * usando o MENOR preço de cada produto (não o primeiro da lista).
 *
 * Depois imprima nome + menor preço, um por linha, já na ordem nova.
 *
 * Dica: usort($array, function ($a, $b) { ... return ...; });
 * Compare min($a["preco"]) com min($b["preco"]).
 *
 * Esperado (ordem):
 *   oleo 5.89
 *   feijao 7.50
 *   arroz 9.99
 *   cafe 14.90
 */

$produtos = [
    ["nome" => "arroz",  "preco" => [10.00, 12.43, 11.75, 9.99, 10.30]],
    ["nome" => "feijao", "preco" => [8.20, 7.50, 9.10, 7.80]],
    ["nome" => "oleo",   "preco" => [6.40, 5.89, 6.15]],
    ["nome" => "cafe",   "preco" => [18.00, 16.50, 14.90, 15.20]],
];

// TODO: usort(...)

// TODO: imprimir na ordem
