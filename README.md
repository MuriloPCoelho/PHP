# Trilha Backend: PHP → Laravel

Repositório de estudo prático para me tornar um bom desenvolvedor backend, partindo de PHP puro até chegar em Laravel com entendimento real dos problemas que o framework resolve.

Baseado em:
- https://roadmap.sh/backend
- https://roadmap.sh/php
- https://roadmap.sh/laravel
- https://roadmap.sh/backend/projects

## Filosofia

- Sem pressa. Fundamentos de PHP bem consolidados antes de qualquer framework.
- Todo conceito estudado é aplicado em código, não só lido.
- Laravel só começa depois que os módulos de PHP puro estiverem completos — nessa altura, cada problema que o Laravel resolve (roteamento, ORM, autenticação, etc.) já vai ter sido sentido "na mão".

## Estrutura do repositório

```
.
├── ROADMAP.md              # Checklist geral de progresso (a fonte da verdade)
├── docs/
│   └── ambiente-wsl.md     # Como configurar e rodar o ambiente de estudo
├── modulos/                # As "aulas": teoria + exercícios curtos, um tópico por vez
│   └── NN-nome-do-topico/
│       ├── README.md       # O que é, por que importa, exercícios
│       └── exercicios/     # Scripts .php pequenos e isolados por conceito
├── projetos/                # As "aplicações": projetos maiores que juntam vários módulos
│   └── NN-nome-do-projeto/
│       └── README.md       # Enunciado + o que deve ser praticado ali
└── laravel/
    └── ROADMAP-laravel.md  # Roadmap do Laravel guardado para quando chegar a hora
```

Divisão intencional:
- **`modulos/`** = aprender um conceito isolado, com o mínimo de ruído possível.
- **`projetos/`** = provar que o conceito foi entendido, combinando com o que já veio antes.

Cada módulo e projeto tem seu próprio `README.md` — não é preciso abrir mais de uma pasta para saber o que fazer.

## Como usar isso no dia a dia

1. Abra `ROADMAP.md` e veja qual é o próximo item não marcado.
2. Entre na pasta do módulo correspondente em `modulos/`, leia o `README.md`.
3. Resolva os exercícios em `exercicios/` (rode com `php arquivo.php`).
4. Quando o módulo indicar um projeto em `projetos/`, implemente ele antes de seguir em frente.
5. Marque o item como concluído no `ROADMAP.md` e faça commit.

Commits pequenos e frequentes são incentivados — um commit por exercício ou por etapa de projeto é ótimo para revisar o progresso depois.

## Ambiente

PHP nativo instalado direto no WSL (Ubuntu), sem Docker por enquanto. Ver [`docs/ambiente-wsl.md`](docs/ambiente-wsl.md) para o passo a passo de instalação e para saber como rodar cada tipo de exercício.
