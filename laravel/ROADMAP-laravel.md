# Roadmap do Laravel (guardado para depois)

Não estudar isso ainda. Este arquivo só existe para não perder o mapeamento levantado em https://roadmap.sh/laravel — será transformado em módulos de verdade (no mesmo formato de `modulos/` e `projetos/`) quando a Fase 5 do `ROADMAP.md` estiver concluída.

Referências:
- https://roadmap.sh/laravel
- https://roadmap.sh/laravel/projects

## Tópicos levantados (ordem aproximada do roadmap.sh)

**Setup e primeiro projeto**
- Laravel Herd / instalação
- Breeze, Livewire, Jetstream, Inertia, starter kits
- Criar um novo projeto
- Fluxo requisição–resposta e estrutura de pastas (`app`, `resources`, `bootstrap`, `routes`, `config`, `storage`, `database`, `tests`, `public`, `vendor`)

**Roteamento e controllers**
- Rotas básicas, parâmetros de rota, rotas nomeadas, grupos de rotas
- Middleware, route model binding, rate limiting
- Controllers básicos, resource controllers, single-action controllers
- Injeção de dependência (global vs. rota)

**Respostas e views**
- Recuperando dados e arquivos, views, JSON, redirects
- Blade: exibição de dados, diretivas, layouts, Blade + Livewire

**Banco de dados**
- Query Builder, CRUD
- Casts, accessors, relationships, query scopes
- Migrations, seeders
- Eloquent ORM, paginação

**Validação e autenticação**
- Validação manual, mensagens de erro
- Autenticação (manual, com starter kits, Sanctum, Passport)
- Autorização: policies, gates
- Criptografia e hashing

**Filas, logging, erros**
- Queues & Jobs
- Logging básico, log stacks, Telescope, Debugbar
- Debugging básico, tratamento de exceções, HTTP exceptions

**Testes**
- Testes unitários e de feature
- PHPUnit, Pest
- Streamed responses

**Deploy e operação**
- Configuração e otimização
- Health route
- Laravel Forge, Laravel Cloud, opções de deploy

**Recursos avançados**
- Events & Listeners, Notifications, Task Scheduling
- File storage, Localization, Facades
- Package management, Artisan, code style, CLIs
- Sail, Octane, performance
- Pulse (monitoring), Pint

## Como isso vai virar módulos

Quando a hora chegar, este arquivo será quebrado em `modulos/16-...` em diante e `projetos/08-...` em diante, seguindo o mesmo padrão do restante do repositório — incluindo o projeto de refazer a `projetos/07-blogging-platform-api` agora em Laravel.
