# Roadmap de Estudo — PHP → Laravel

Checklist de progresso. Baseado em [roadmap.sh/php](https://roadmap.sh/php), [roadmap.sh/backend](https://roadmap.sh/backend) e [roadmap.sh/backend/projects](https://roadmap.sh/backend/projects).

Regra: um módulo só é marcado como concluído quando o exercício **e** (se houver) o projeto associado estiverem feitos — não só a leitura.

## Fase 0 — Ambiente

- [x] `modulos/00-ambiente-e-ferramentas` — PHP instalado no WSL, editor configurado, Git funcionando

## Fase 1 — Fundamentos da linguagem

- [ ] `modulos/01-fundamentos-sintaxe-tipos-controle-fluxo` — sintaxe básica, variáveis e escopo, tipos de dados, casting, `echo`/`print`/`var_dump`/`print_r`, arrays (indexado, associativo, multidimensional), condicionais (`if`/`else`, `switch`, `match`, null coalescing, null-safe), loops, constantes
  - [ ] Projeto: `projetos/01-number-guessing-game`
- [ ] `modulos/02-funcoes` — declaração, parâmetros/retorno, valores padrão/opcionais, named arguments, funções anônimas, arrow functions, callbacks, recursão, funções variádicas
  - [ ] Projeto: `projetos/02-task-tracker-cli`
- [ ] `modulos/03-arquivos-e-dados` — `require`/`include` (+ `_once`), leitura/escrita de arquivos, permissões, processamento de JSON/CSV/XML
  - [ ] Projeto: `projetos/03-expense-tracker-cli`
- [ ] `modulos/04-http-e-formularios` — métodos HTTP, superglobais (`$_GET`, `$_POST`, `$_REQUEST`, `$_SERVER`), processamento de formulários, upload de arquivos, cookies, sessions
- [ ] `modulos/05-seguranca-basica` — validação de input, prevenção de XSS, SQL injection, CSRF, hashing de senha (`password_hash`), sanitização
- [ ] `modulos/06-banco-de-dados-pdo` — PDO, MySQLi, conexão e transações, noção de ORM, migrations manuais, otimização básica de queries
  - [ ] Projeto: `projetos/04-personal-blog`

## Fase 2 — Orientação a objetos

- [ ] `modulos/07-oop-fundamentos` — classes e objetos, construtor/destrutor, propriedades e métodos, especificadores de acesso, métodos/propriedades estáticas, herança
- [ ] `modulos/08-oop-avancado` — polimorfismo, classes abstratas, interfaces, traits, namespaces, magic methods, dependency injection, type declarations
  - [ ] Projeto: `projetos/05-todo-list-api` (API REST em PHP puro, sem framework)

## Fase 3 — Ferramentas e ecossistema profissional

- [ ] `modulos/09-composer-autoload-psr` — Composer, Packagist, autoloading, PSR standards
- [ ] `modulos/10-testes-e-qualidade` — PHPUnit, Pest, PHP_CodeSniffer / PHP-CS-Fixer, análise estática (PHPStan, Psalm, Phan)
- [ ] `modulos/11-integracoes-externas` — cURL, Guzzle, consumo de APIs externas
  - [ ] Projeto: `projetos/06-url-shortening-service`

## Fase 4 — Tópicos avançados

- [ ] `modulos/12-performance-e-cache` — profiling, estratégias de cache, gerenciamento de memória, opcode caching
- [ ] `modulos/13-sistema-cli-env` — execução de comandos do sistema, controle de processos, variáveis de ambiente, arquivos de configuração
- [ ] `modulos/14-debugging-xdebug` — Xdebug, técnicas de depuração
- [ ] `modulos/15-servidores-web` — Apache, Nginx, PHP-FPM (noções de deploy)

## Fase 5 — Projeto final em PHP puro (checkpoint pré-Laravel)

- [ ] `projetos/07-blogging-platform-api` — API completa (rotas, controllers, camada de banco via PDO, autenticação, validação), construída à mão. Esse é o projeto que depois será **refeito em Laravel** só para sentir na pele o que o framework está resolvendo.

---

## Fase 6 — Laravel (só começar depois da Fase 5 completa)

Ver [`laravel/ROADMAP-laravel.md`](laravel/ROADMAP-laravel.md). Não abrir esse arquivo com intenção de estudar antes da hora — é só para não perder o mapeamento já levantado.

---

## Notas de escopo (tirado do roadmap.sh/backend, fora do escopo de PHP puro mas relevante mais pra frente)

Itens do roadmap geral de backend que **não** entram nos módulos acima, mas vale ter no radar para depois de Laravel: Docker/Kubernetes, arquiteturas (monolito vs microsserviços vs SOA), message brokers (RabbitMQ/Kafka), bancos NoSQL (MongoDB, Redis), WebSockets, observabilidade/monitoramento, CI/CD, autenticação avançada (OAuth, JWT, SAML). Não é para estudar agora — só para não esquecer que existem.
