<?php

/**
 * Exercício 2 — Saída e Debug
 *
 * Objetivo: entender quando usar echo, print, var_dump e print_r.
 *
 * TODO 1: Crie um array associativo representando uma pessoa
 *         (nome, idade, ativo) com pelo menos 3 chaves.
 *
 * TODO 2: Imprima esse array com print_r() e depois com var_dump().
 *         Compare a saída dos dois e, em um comentário, anote a diferença
 *         principal entre eles.
 *
 * TODO 3: Tente usar echo diretamente no array (ex: echo $pessoa;) e veja o
 *         que acontece / qual erro ou aviso aparece. Anote em um comentário
 *         por que isso não funciona como com uma string.
 *
 * TODO 4: Use var_dump() para comparar os valores 10, "10", 10.0 e "10.0".
 *         Anote em um comentário quais desses o PHP considera "iguais" com
 *         == e quais com ===.
 */

// seu código aqui

// TODO 1: 
const PESSOA = [
  "nome" => "Jair Inácio",
  "idade" => 67,
  "altura_centimetros" => 170,
  "peso_kilogramas" => 83,
  "ativo" => true
];

// TODO 2:
print_r(PESSOA);
echo "\n";
var_dump(PESSOA);

echo "\n";

// TODO 3:
// echo PESSOA; //PHP Warning: Array to string conversion

// TODO 4:
var_dump(10 == "10"); //true
var_dump(10 === "10"); //false
var_dump(10 == 10.0); //true
var_dump(10 === 10.0); //false
var_dump(10 == "10.0"); //true
var_dump(10 === "10.0"); //false