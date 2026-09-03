<?php
$produtos = [
    ["nome" => "arroz", "preco" => [10.00, 12.43, 11.75, 9.99, 10.30]],
];

foreach ($produtos as $produto) {
    $menor_preco = $produto["preco"];
    sort($menor_preco);
    echo "O menor preco do produto " . $produto["nome"] . " é : " . $menor_preco[0] . "\n";
}
