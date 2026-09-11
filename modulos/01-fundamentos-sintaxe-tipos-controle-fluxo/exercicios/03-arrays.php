<?php

/**
 * Exercício 3 — Arrays
 *
 * Objetivo: praticar arrays indexados, associativos e multidimensionais.
 *
 * TODO 1: Crie um array indexado com 5 números.
 *         - Imprima a soma de todos usando um loop (sem array_sum, ainda).
 *         - Depois refaça a soma usando array_sum() e confirme que bate.
 *
 * TODO 2: Crie um array associativo com preços de produtos, ex:
 *         ["arroz" => 25.90, "feijao" => 8.50, "leite" => 4.20]
 *         - Imprima cada produto e preço usando foreach ($arr as $chave => $valor).
 *         - Use array_filter() para pegar só os produtos com preço acima de 10.
 *
 * TODO 3: Crie um array multidimensional representando 3 pessoas, cada uma
 *         com nome e idade, ex:
 *         [
 *             ["nome" => "Ana", "idade" => 28],
 *             ["nome" => "Bruno", "idade" => 34],
 *         ]
 *         - Percorra com foreach e imprima "NOME tem IDADE anos".
 *         - Use array_map() para criar um novo array só com os nomes.
 *
 * TODO 4: Use in_array() para verificar se um determinado nome está na lista
 *         de pessoas do TODO 3 (dica: primeiro extraia os nomes com array_map
 *         ou array_column).
 */

// seu código aqui

// TODO 1:
const NUMEROS = [3, 85, 26, 7, 41, 201, 55, 12, 5443];
$somatorio = 0;

foreach(NUMEROS as $numero) {
  $somatorio += $numero;
}
echo "Soma com foreach: $somatorio\n";

echo "Soma com array_sum: " . array_sum(NUMEROS) . "\n";

// TODO 2:
const PRODUTOS = ["arroz 5kg" => 14500, "feijão 1kg" => 600, "bolo" => 21000];

foreach(PRODUTOS as $produto => $preco) {
  echo $produto . ' - ' . $preco . "\n";
}

// TODO 3: 
const CARROS = [
  ["modelo" => "Celta", "marca" => "Chevrolet", "preco_cents" => 2990000, "ano_fabricacao" => 2004,"ano_modelo" => 2005],
  ["modelo" => "Sandero", "marca" => "Renault", "preco_cents" => 4590000, "ano_fabricacao" => 2014,"ano_modelo" => 2014],
  ["modelo" => "325i", "marca" => "BMW", "preco_cents" => 34900000, "ano_fabricacao" => 2025,"ano_modelo" => 2026]
];

foreach(CARROS as $carro) {
  echo "Modelo: " . $carro['modelo'] . " | " . "Marca:" . $carro['marca'] .  " | " . "Ano: " . $carro['ano_fabricacao']. "/" . $carro['ano_modelo'] ."\n";
}

$nomeDosCarros = array_map(function ($carro) {
  return $carro['modelo'];
}, CARROS);

print_r($nomeDosCarros);

// TODO 4:
var_dump(in_array("325i", $nomeDosCarros));
var_dump(in_array("Opala", $nomeDosCarros));