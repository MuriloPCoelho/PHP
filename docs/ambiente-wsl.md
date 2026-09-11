# Ambiente de estudo — PHP nativo no WSL

Sem Docker por enquanto. A ideia é tirar qualquer fricção de setup do caminho e focar na linguagem. Cada módulo aqui roda com `php arquivo.php` no terminal — nada além disso é necessário no início.

## 1. Instalar o PHP no Ubuntu (WSL)

```bash
sudo apt update
sudo apt install -y php-cli php-mbstring php-xml php-curl unzip
php -v
```

Isso é suficiente para toda a Fase 1 (fundamentos) e boa parte da Fase 2 (OOP). Nada de Apache/Nginx/PHP-FPM ainda — isso só entra lá na Fase 4 (`modulos/15-servidores-web`), quando o assunto for justamente servidores web.

## 2. Rodar um script

```bash
php modulos/01-fundamentos-sintaxe-tipos-controle-fluxo/exercicios/01-variaveis.php
```

## 3. Quando o módulo envolver HTTP (Fase 1, `04-http-e-formularios` em diante)

O PHP tem um servidor embutido, sem precisar instalar nada a mais:

```bash
php -S localhost:8000 -t caminho/da/pasta
```

Acesse `http://localhost:8000` no navegador (do Windows mesmo — o WSL expõe a porta automaticamente).

## 4. Quando chegar em banco de dados (`modulos/06-banco-de-dados-pdo`)

Duas opções, na ordem recomendada:

1. **SQLite** primeiro — zero instalação de servidor, só `sudo apt install -y php-sqlite3 sqlite3`, e o "banco" é um arquivo. Ideal pra focar em PDO sem se preocupar com configuração de servidor de banco.
2. **MySQL** depois, quando quiser praticar especificamente o que muda com um servidor de banco de verdade:
   ```bash
   sudo apt install -y mysql-server php-mysql
   sudo service mysql start
   ```

Esse repositório vai te avisar em `modulos/06-banco-de-dados-pdo/README.md` qual usar em cada exercício.

## 5. Composer (só a partir de `modulos/09-composer-autoload-psr`)

Não instalar antes disso de propósito — parte do objetivo é sentir a diferença entre "PHP sem nada" e "PHP com um gerenciador de pacotes e autoload" quando o módulo específico chegar.

```bash
sudo apt install -y composer
composer --version
```

## 6. Editor

VS Code (rodando no Windows) + extensão **WSL** da Microsoft para abrir a pasta direto no Ubuntu. Extensões de PHP recomendadas, para instalar quando fizer sentido (não precisa de tudo desde o dia 1):

- **PHP Intelephense** — autocomplete e navegação de código.
- **PHP Debug** (Xdebug) — só instalar quando chegar em `modulos/14-debugging-xdebug`.

## 7. Git

O repositório já está inicializado (`.git` existe). Fluxo sugerido: um commit por exercício resolvido ou por etapa concluída de projeto.

```bash
git add .
git commit -m "modulo 01: exercicios de variaveis e tipos"
```

## Quando (e se) migrar para Docker

Fica registrado aqui como decisão consciente: Docker é conteúdo do roadmap geral de backend, mas entra depois — quando fizer sentido rodar múltiplos serviços juntos (PHP + banco + talvez Redis) de forma parecida com produção. Não é bloqueio para nada do que vem nesse repositório até a Fase 5.
