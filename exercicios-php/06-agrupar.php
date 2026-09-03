<?php
/**
 * Exercício 06 — Agrupar
 *
 * TODO:
 * 1. Monte um array no formato:
 *      [ categoria => [ nomes dos produtos nessa categoria ] ]
 * 2. Extra: para cada categoria, some todos os preços (todas as lojas)
 *    e imprima o total por categoria.
 *
 * Dica: comece com $por_categoria = []; no foreach, se a chave ainda
 * não existir, inicialize com []; depois faça [] = nome.
 *
 * Esperado (nomes):
 *   graos   => arroz, feijao
 *   oleos   => oleo
 *   bebidas => cafe
 */

$produtos = [
    ["nome" => "arroz",  "categoria" => "graos",   "preco" => [10.00, 12.43, 11.75, 9.99, 10.30]],
    ["nome" => "feijao", "categoria" => "graos",   "preco" => [8.20, 7.50, 9.10, 7.80]],
    ["nome" => "oleo",   "categoria" => "oleos",   "preco" => [6.40, 5.89, 6.15]],
    ["nome" => "cafe",   "categoria" => "bebidas", "preco" => [18.00, 16.50, 14.90, 15.20]],
];

// TODO: $por_categoria = ...

// TODO: imprimir agrupamento

// TODO: totais por categoria (opcional)
