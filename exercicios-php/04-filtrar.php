<?php
/**
 * Exercício 04 — Filtrar
 *
 * TODO:
 * Use array_filter (não só if dentro de foreach) para ficar só com os produtos
 * que tenham ALGUM preço abaixo de $limite (10).
 *
 * Depois imprima o nome de cada produto que passou no filtro.
 *
 * Dica: dentro do callback, você pode percorrer $produto["preco"] ou usar min().
 *
 * Esperado: arroz, feijao, oleo (cafe não entra — o menor é 14.90)
 */

$produtos = [
    ["nome" => "arroz",  "preco" => [10.00, 12.43, 11.75, 9.99, 10.30]],
    ["nome" => "feijao", "preco" => [8.20, 7.50, 9.10, 7.80]],
    ["nome" => "oleo",   "preco" => [6.40, 5.89, 6.15]],
    ["nome" => "cafe",   "preco" => [18.00, 16.50, 14.90, 15.20]],
];

$limite = 10;

// TODO: $baratos = array_filter(...)

// TODO: imprimir os nomes
