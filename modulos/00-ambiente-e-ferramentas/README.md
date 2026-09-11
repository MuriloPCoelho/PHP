# Módulo 00 — Ambiente e Ferramentas

## Objetivo

Ter um ambiente de PHP funcionando no WSL, saber rodar um script, e entender como este repositório vai ser usado dia a dia. Sem isso resolvido, nenhum módulo seguinte faz sentido.

## Checklist

Siga [`docs/ambiente-wsl.md`](../../docs/ambiente-wsl.md), seções 1, 2, 6 e 7:

- [ ] PHP CLI instalado (`php -v` funcionando no terminal do WSL)
- [ ] VS Code aberto na pasta do repositório via extensão WSL (ou outro editor de sua preferência)
- [ ] Extensão PHP Intelephense instalada (autocomplete básico)
- [ ] `git` funcionando dentro da pasta (`git status` sem erro)

## Por que isso importa

Antes de escrever uma linha de lógica, vale entender **onde** o PHP roda: ele não é como o JavaScript no navegador (que já vem embutido). O interpretador PHP (`php-cli`) é um programa que você instala, e que lê um arquivo `.php` e executa de cima a baixo. Esse detalhe importa porque, mais pra frente (servidores web, PHP-FPM), você vai ver que existem várias formas diferentes desse mesmo interpretador ser invocado — mas a linguagem em si é a mesma.

## Exercício

Crie `exercicios/hello.php` com um script que:

1. Imprime a versão do PHP instalada (dica: existe uma constante prontinha pra isso — procure por `PHP_VERSION`).
2. Imprime a data e hora atual (dica: função `date()`).
3. Rode com `php exercicios/hello.php` e confirme que funciona.

Depois, faça o primeiro commit do repositório:

```bash
git add .
git commit -m "modulo 00: ambiente configurado"
```

Quando terminar, marque este módulo como concluído no [`ROADMAP.md`](../../ROADMAP.md) e vá para `modulos/01-fundamentos-sintaxe-tipos-controle-fluxo`.
