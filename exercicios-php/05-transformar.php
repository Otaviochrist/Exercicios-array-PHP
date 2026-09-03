<?php
/**
 * Exercício 05 — Transformar
 *
 * TODO:
 * Com array_map, gere um novo array em que cada item tenha:
 *   - "nome"
 *   - "preco_minimo" (um número, não a lista inteira)
 *
 * Imprima o array resultante (print_r ou var_dump).
 *
 * Esperado (valores):
 *   arroz  => 9.99
 *   feijao => 7.50
 *   oleo   => 5.89
 *   cafe   => 14.90
 */

$produtos = [
    ["nome" => "arroz",  "preco" => [10.00, 12.43, 11.75, 9.99, 10.30]],
    ["nome" => "feijao", "preco" => [8.20, 7.50, 9.10, 7.80]],
    ["nome" => "oleo",   "preco" => [6.40, 5.89, 6.15]],
    ["nome" => "cafe",   "preco" => [18.00, 16.50, 14.90, 15.20]],
];

// TODO: $resumo = array_map(...)

// TODO: imprimir $resumo
