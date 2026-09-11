<?php

/**
 * Number Guessing Game — esqueleto.
 * Preencha os TODOs. Veja o README.md desta pasta para o enunciado completo.
 */

echo "Welcome to the Number Guessing Game!\n";
echo "I'm thinking of a number between 1 and 100.\n";

// TODO 1: sortear o número secreto (random_int(1, 100))
$numeroSecreto = null;

// TODO 2: mostrar o menu de dificuldade e ler a escolha do usuário
//   1. Easy   -> 10 tentativas
//   2. Medium -> 5 tentativas
//   3. Hard   -> 3 tentativas
// Dica: use match() para converter a escolha em número de tentativas.

echo "Please select the difficulty level:\n";
echo "1. Easy (10 chances)\n";
echo "2. Medium (5 chances)\n";
echo "3. Hard (3 chances)\n";
echo "Enter your choice: ";

$escolha = trim(fgets(STDIN));

// TODO 3: transformar $escolha em $tentativasRestantes usando match()
$tentativasRestantes = null;

echo "Let's start the game!\n";

// TODO 4: loop principal do jogo
//   - Perguntar o palpite ("Enter your guess: ")
//   - Ler com trim(fgets(STDIN)) e converter para int
//   - Comparar com $numeroSecreto:
//       - igual  -> mensagem de parabéns com o número de tentativas usadas, encerrar
//       - maior  -> "Incorrect! The number is less than X."
//       - menor  -> "Incorrect! The number is greater than X."
//   - Decrementar tentativas; se chegar a zero sem acertar, informar o fim de jogo
//     e revelar o número secreto.

// seu código aqui
