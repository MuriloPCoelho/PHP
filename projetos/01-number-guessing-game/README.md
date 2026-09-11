# Projeto 01 — Number Guessing Game

Baseado em: https://roadmap.sh/projects/number-guessing-game

Aplica: `modulos/00-ambiente-e-ferramentas` + `modulos/01-fundamentos-sintaxe-tipos-controle-fluxo` (variáveis, tipos, arrays, condicionais, loops). Nenhuma função própria ainda é necessária (isso é o Módulo 02) — mas se quiser adiantar e usar, sem problema.

## Enunciado (original do roadmap.sh)

Você deve construir um jogo simples de adivinhação de números, onde o computador seleciona aleatoriamente um número e o usuário precisa adivinhá-lo. O usuário terá um número limitado de tentativas. Se acertar, o jogo termina e o usuário vence. Caso contrário, o jogo continua até as tentativas acabarem.

### Requisitos

É um jogo via linha de comando (CLI). O jogo deve funcionar assim:

- Ao iniciar, exibir uma mensagem de boas-vindas com as regras do jogo.
- O computador escolhe aleatoriamente um número entre 1 e 100.
- O usuário escolhe o nível de dificuldade (fácil, médio, difícil), que determina o número de tentativas.
- O usuário informa seu palpite.
- Se o palpite estiver correto, exibir mensagem de parabéns com o número de tentativas usadas.
- Se estiver incorreto, informar se o número é maior ou menor que o palpite.
- O jogo termina quando o usuário acerta ou esgota as tentativas.

### Exemplo de saída

```
Welcome to the Number Guessing Game!
I'm thinking of a number between 1 and 100.
You have 5 chances to guess the correct number.
Please select the difficulty level:
1. Easy (10 chances)
2. Medium (5 chances)
3. Hard (3 chances)
Enter your choice: 2
Great! You have selected the Medium difficulty level.
Let's start the game!
Enter your guess: 50
Incorrect! The number is less than 50.
Enter your guess: 25
Incorrect! The number is greater than 25.
Enter your guess: 35
Incorrect! The number is less than 35.
Enter your guess: 30
Congratulations! You guessed the correct number in 4 attempts.
```

### Melhorias opcionais (do próprio roadmap.sh, para depois de a versão básica funcionar)

- Permitir jogar várias rodadas seguidas (perguntar se quer jogar de novo).
- Cronômetro de quanto tempo levou para acertar.
- Sistema de dicas quando o usuário estiver travado.
- Guardar o recorde (menor número de tentativas) por nível de dificuldade.

## Dicas técnicas (ligadas ao Módulo 01)

- Número aleatório: `rand(1, 100)` ou `random_int(1, 100)` (prefira `random_int` — é mais indicado até para coisas simples, e vale já pegar o hábito).
- Ler o que o usuário digita no terminal: `trim(fgets(STDIN))`.
- Difficuldade → tentativas: ótimo lugar para praticar `match` (Módulo 01) em vez de `if/elseif` encadeado.
- Comparar palpite com número: `if/else` simples, ou pratique `<=>` (spaceship operator) se quiser ir além do exigido.
- Contador de tentativas: uma variável incrementada a cada palpite, dentro de um `while`.

## Onde codar

Crie `jogo.php` nesta pasta e rode com:

```bash
php projetos/01-number-guessing-game/jogo.php
```

## Definição de pronto

- [ ] Funciona os 3 níveis de dificuldade
- [ ] Informa "maior"/"menor" a cada tentativa errada
- [ ] Termina corretamente ao acertar ou ao esgotar tentativas
- [ ] Pelo menos 1 melhoria opcional implementada
- [ ] Commitado com uma mensagem clara
