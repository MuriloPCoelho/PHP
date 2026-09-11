<?php

/**
 * Exercício 1 — Variáveis e Tipos
 *
 * Objetivo: praticar tipos, casting e a diferença entre == e ===.
 *
 * TODO 1: Crie 4 variáveis: uma int, uma float, uma string e uma bool.
 *         Use var_dump() em cada uma para confirmar o tipo.
 *
 * TODO 2: Pegue a string "42" e converta para int usando cast explícito ((int)).
 *         Imprima o resultado com var_dump() antes e depois da conversão.
 *
 * TODO 3: Escreva 3 comparações usando == e as mesmas 3 usando ===, escolhendo
 *         valores onde o resultado seja DIFERENTE entre os dois operadores
 *         (ex: 0 e "0", "" e null, "10" e "1e1"). Imprima cada resultado com
 *         var_dump() e, em um comentário ao lado, explique por que dá esse resultado.
 *
 * TODO 4: Crie uma variável dentro de um bloco if e mostre que ela continua
 *         acessível depois do bloco (escopo de função, não de bloco).
 */

// seu código aqui

$inteiro = 10;
$flutuante = 10.0;
$texto = "10";
$booleano = true;
$bit = 1;

echo "TODO 1: \n";
var_dump($inteiro);
var_dump($flutuante);
var_dump($texto);
var_dump($booleano);
var_dump($bit);
var_dump($booleano === $bit);
var_dump($booleano == $bit);

echo "\n";

echo "TODO 2: \n";
$texto2 = "42";
var_dump($texto2);
var_dump((int)$texto2);

echo "\n";
echo "TODO 3: \n";
var_dump(" 0 == '0' => " . (0 == "0"));
var_dump(" 0 === '0' => " . (0 === "0"));
var_dump(" '' == null => " . ("" == null));
var_dump(" '' === null => " . ("" === null));
var_dump(" '10' == 1e1 => " . ("10" == 1e1));
var_dump(" '10' === 1e1 => " . ("10" === 1e1));
var_dump(" '' == ' ' => " . ("" == ' '));
var_dump(" '' === ' ' => " . ("" === ' '));
var_dump(" 0 == false => " . (0 == false));
var_dump(" 0 === false => " . (0 === false));
var_dump(" false == null => " . (false == null));
var_dump(" false === null => " . (false === null));

echo "\n";
echo "TODO 4: \n";


if (true) {
  $escopo = "Apenas uma variável dentro de um bloco if";
}

var_dump($escopo);

$fora = "Variável fora do bloco if";
if (true) {
  $fora = "Blablabla";
}

var_dump($fora);
