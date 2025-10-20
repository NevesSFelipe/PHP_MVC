# PHP MVC

**Estrutura simples, organizada e escalável em PHP puro seguindo o padrão MVC (Model-View-Controller)**

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge\&logo=php\&logoColor=white)
![MVC](https://img.shields.io/badge/MVC-Architecture-blue?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

## Sobre o Projeto

Este repositório apresenta uma estrutura limpa de MVC em PHP **sem frameworks**, ideal para quem deseja:

* Ter controle total do código
* Entender a arquitetura MVC na prática
* Iniciar sistemas organizados e escaláveis
* Criar novos módulos rapidamente (Controller, Model e View)

## Sumário

* Estrutura de Pastas
* Recursos do Projeto
* Instalação
* Configuração do .env
* Como Funciona o Roteamento
* Criando um Novo Módulo
* Licença

## Estrutura de Pastas

```
/PHP_MVC
├── App/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   │   └── assets/
│   │       └── css/
│   ├── core/
│   │   ├── Model.php
│   │   ├── Rotas.php
│   │   └── Views.php
├── vendor/
├── index.php
├── composer.json
├── .env_exemplo
├── .htaccess
└── README.md
```

## Recursos do Projeto

* Autoload PSR-4
* Roteamento Dinâmico
* Controller / Model / View automáticos
* Variáveis de ambiente (.env)
* Conexão PDO (MySQL)
* Views organizadas por controller

## Instalação

```bash
git clone https://github.com/NevesSFelipe/PHP_MVC.git
cd PHP_MVC
composer install
```

## Configuração do `.env`

Duplique o `.env_exemplo` e renomeie para `.env`, depois edite:

```env
URL_BASE=URL_BASE_SEU_PROJETO
CONTROLLER_DEFAULT=SUA_CONTROLLER_DEFAULT
METODO_DEFAULT=SEU_METODO_DEFAULT

HOST=HOST_DO_SEU_PROJETP
BD=NOME_BANCO
USUARIO_BD=USUARIO_BD
SENHA_BD=SENHA_BD

```

## Como funciona o roteamento

URL:

```
http://localhost/github/PHP_MVC/user/editar/10
```

Interpretação:

* `user` → UserController
* `editar` → método editar()
* `10` → parâmetro

## Criando um novo módulo

1. Criar controller em `/App/controllers/UserController.php`
2. Criar model em `/App/models/UserModel.php`
3. Criar view em `/App/views/user/index.php`
4. Acessar no navegador:

```
/user/index
```

## Licença

MIT — use livremente.