# Módulo 01 — Fundamentos: Sintaxe, Tipos, Arrays e Controle de Fluxo

Você já conhece `echo`, variáveis, `if` e loops básicos — então este módulo não começa do zero absoluto. O objetivo aqui é dois: (1) preencher lacunas comuns de quem aprendeu PHP "por cima" (tipagem, casting, sintaxes mais novas do PHP 8) e (2) treinar arrays e controle de fluxo até virar automático, porque isso é usado o tempo todo em tudo que vem depois.

Tópicos do roadmap.sh cobertos aqui: sintaxe básica, variáveis e escopo, tipos de dados, casting, `echo`/`print`/`var_dump`/`print_r`, arrays (indexado, associativo, multidimensional), condicionais (`if`/`else`, `switch`, `match`, null coalescing, null-safe), loops, constantes.

## 1. Variáveis, escopo e tipos

PHP é **dinamicamente tipado**: uma variável não tem tipo fixo, o valor que ela guarda é que tem um tipo. Isso é diferente de `type Foo = string` do TypeScript, por exemplo — aqui o tipo só existe em tempo de execução, a não ser que você declare tipos explícitos em funções (isso vem no Módulo 02).

Tipos primitivos: `int`, `float`, `string`, `bool`, `array`, `null`, e os especiais `object`, `callable`, `resource`.

**Escopo importa desde já**: uma variável declarada dentro de uma função não existe fora dela, e vice-versa — PHP não tem escopo de bloco como `if`/`for` (diferente de JS com `let`), só escopo de função. Ou seja, uma variável criada dentro de um `if` continua acessível depois do `if`, contanto que esteja na mesma função.

**Casting** (conversão de tipo): PHP faz conversão implícita o tempo todo (`"5" + 3` vira `8`), o que é conveniente mas também fonte clássica de bug. Por isso existe:
- Casting explícito: `(int) $valor`, `(string) $valor`, `(bool) $valor`, etc.
- Comparação **estrita** (`===` / `!==`) vs **frouxa** (`==` / `!=`) — `"0" == false` é `true`, `"0" === false` é `false`. Prefira sempre `===` a menos que você queira a conversão de propósito.

## 2. Saída e debug

- `echo` — imprime uma ou mais strings, mais rápido, não retorna valor. É o que você já usa.
- `print` — parecido, mas só aceita um argumento e retorna `1` (raramente faz diferença na prática).
- `var_dump($valor)` — mostra **tipo e valor**, recursivamente para arrays/objetos. É a ferramenta de debug mais usada em PHP puro.
- `print_r($valor)` — mostra só a estrutura de forma legível, sem tipos. Bom para arrays quando você não precisa saber o tipo de cada item.

Regra prática: quando algo não se comporta como esperado, `var_dump()` primeiro — ele revela problemas de tipo que `echo` esconde (ex: `"10"` vs `10` vs `10.0`).

## 3. Arrays

Em PHP só existe um tipo "array", mas ele serve tanto de lista quanto de dicionário:
- **Indexado**: `[1, 2, 3]` — chaves numéricas automáticas (0, 1, 2...).
- **Associativo**: `["nome" => "Murilo", "idade" => 30]` — chaves que você escolhe.
- **Multidimensional**: array de arrays — é assim que se representa uma "tabela" ou uma lista de registros em PHP puro (antes de existir qualquer ORM).

Funções essenciais para praticar: `count()`, `array_push()`/`$arr[] = x`, `array_map()`, `array_filter()`, `array_keys()`, `in_array()`, `foreach`.

## 4. Condicionais

Além do `if`/`else` e `switch` que você já conhece, o PHP moderno (8.x) trouxe formas mais seguras e diretas:

- **`match`** (PHP 8+): parecido com `switch`, mas usa comparação **estrita** por padrão, não precisa de `break`, e é uma expressão (retorna valor). Prefira `match` a `switch` em código novo sempre que fizer sentido.
- **Null coalescing (`??`)**: `$x = $a ?? $b;` — usa `$b` se `$a` for `null` ou não existir. Evita ter que escrever `isset($a) ? $a : $b`.
- **Null-safe operator (`?->`)**: `$obj?->metodo()` — chama o método só se `$obj` não for `null`, senão retorna `null` em vez de dar erro. Muito usado quando se navega em objetos que podem não existir (ex: relacionamentos de banco).

## 5. Loops e constantes

`for`, `while`, `do...while`, `foreach` — praticar quando usar cada um (dica: `foreach` para percorrer arrays, é o mais comum no dia a dia). `break` e `continue` para controlar o fluxo dentro do loop.

Constantes (`define('NOME', valor)` ou `const NOME = valor;`): valores que não mudam durante a execução — úteis para configurações, limites, chaves de array que se repetem.

## Exercícios

Na pasta `exercicios/`, resolva na ordem (cada arquivo tem instruções em comentário no topo):

1. `01-variaveis-e-tipos.php`
2. `02-saida-e-debug.php`
3. `03-arrays.php`
4. `04-condicionais.php`
5. `05-loops.php`
6. `06-constantes.php`

Rode cada um com `php exercicios/NN-nome.php` e confira se a saída bate com o que o comentário do arquivo pede.

## Perguntas para refletir (responda pra você mesmo, não precisa entregar nada)

- Por que `"10" == "1e1"` é `true` em PHP? O que isso me ensina sobre usar `===`?
- Em que situação eu preferiria `switch` a `match`, se é que existe alguma?
- Qual a diferença prática entre `$a ?? $b` e `$a ?: $b`?

Se alguma dessas perguntas não tiver resposta clara, vale pesquisar antes de seguir — é exatamente esse tipo de detalhe que costuma faltar em quem aprendeu PHP "por cima".

## Projeto prático

Depois de terminar os exercícios: [`projetos/01-number-guessing-game`](../../projetos/01-number-guessing-game). Ele usa só o que foi visto até aqui (variáveis, tipos, condicionais, loops) — é o teste de que os fundamentos realmente grudaram antes de avançar para funções.
