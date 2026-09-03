<?php
/**
 * Exercício 08 — Desafio: carrinho
 *
 * $tabela: nome do produto => lista de preços (várias lojas).
 * $carrinho: itens com "produto" e "qtd".
 *
 * Para cada item do carrinho, o preço unitário é o MENOR preço da tabela.
 * Subtotal do item = preço unitário * qtd.
 *
 * TODO:
 * 1. Imprimir cada item: nome, qtd, unitário, subtotal.
 * 2. Imprimir o total geral do carrinho.
 * 3. Qual item é o mais caro do carrinho? (maior subtotal — nome + valor)
 *
 * Cuidado: "cafe" aparece no carrinho; precisa existir na tabela.
 *
 * Esperado (confira na mão):
 *   arroz  x2  unitário 9.99  subtotal 19.98
 *   feijao x1  unitário 7.50  subtotal 7.50
 *   oleo   x3  unitário 5.89  subtotal 17.67
 *   cafe   x1  unitário 14.90 subtotal 14.90
 *   total geral ≈ 60.05
 *   item mais caro (subtotal): arroz 19.98
 */

$tabela = [
    "arroz"  => [10.00, 12.43, 11.75, 9.99, 10.30],
    "feijao" => [8.20, 7.50, 9.10, 7.80],
    "oleo"   => [6.40, 5.89, 6.15],
    "cafe"   => [18.00, 16.50, 14.90, 15.20],
];

$carrinho = [
    ["produto" => "arroz",  "qtd" => 2],
    ["produto" => "feijao", "qtd" => 1],
    ["produto" => "oleo",   "qtd" => 3],
    ["produto" => "cafe",   "qtd" => 1],
];

// TODO: percorrer o carrinho, calcular unitário/subtotal, acumular total

// TODO: imprimir linhas + total geral + item de maior subtotal
