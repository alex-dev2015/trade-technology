# TRADE Technology

## Itens do Projto

- [Objetivo](#about)
- [Iniciando](#getting_started)
- [Prerequisitos](#requisite)
- [Backend](#backend)
- [Tecnologias](#tech)
- [Licença](#license)

## 🎯 Objetivo <a name = "about"></a>

O projeto trata-se de um desafio técnico , onde o backend é uma arquitetura api RestFull desenvolvida em Laravel, onde o objetivo é realizar a simulação de um campeonato de futebol com fases eliminatórias.

O banco de dados foi desenvolvido em MySql e está nomeado como competizione, porém isso não é uma regra, poderá ser qualquer nome de usa preferência.

## 🚦Iniciando o projeto <a name = "getting_started"></a>

Para ter uma cópia do projeto, basta realizar o clone desse repositório e prosseguir com os passos seguintes.

## 🛑 Prerequisitos <a name = "requisite"></a>

É necessário você possuir o Php,  Mysql e o Git instalados em sua máquina.

```
git clone https://github.com/alex-dev2015/trade-technology.git
```

## 🎬 Instalação do Backend <a name = "backend"></a>

Criar um banco de dados em seu SGBD.
```
CREATE DATABASE `competizione` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ 
```

Passos para a instalação do backend.
Entrar na pasta e realizar a instalação das dependências.

```
 cd backend
 composer install
```
Editar o arquivo .env-example para .env , modicar as variáveis de ambiente de acesso ao banco e gerar a chave criptografada.


```
  cp .env.example .env
  DB_DATABASE=competizione
  DB_USERNAME=root
  DB_PASSWORD=
  php artisan key:generate
```

Depois de configurado rodar as migrations e o seeder.

```
  php artisan migrate
  php artisan db:seed --class=RoundSeeder
```
Subir o servidor
```
  php artisan serve
```

Por padrão ao subir o servidor com o artisan, ele é iniciado na porta 8000
```
http:\\localhost:8000
```
### 📋 Documentação com o Swagger <a name = "docs"></a>

Após subir o servidor, é possível acessar a documentação da API através do seguinte link:

```
http://localhost:8000/api/documentation
```


## 🛠 Tecnologias Utilizadas <a name = "tech"></a>

<ul>
    <li>VsCode</li>
    <li>Insomnia</li>
    <li><strong>ReactJS</strong></li>
    <li><strong>Php 8.0.2</strong></li>
    <li><strong>MySql 8.0</strong></li>
    <li><strong>Laravel 8</strong></li>
    <li>Swagger</li>
</ul>

## 📜 Licença ## <a name = "license"></a>

Este projeto está sob licença MIT. Veja o arquivo [LICENSE](LICENSE.md) para mais detalhes.


Feito com :heart: por <a href="https://github.com/alex-dev2015" target="_blank">Alex Sousa</a>

&#xa0;

<a href="#top">Voltar para o topo</a>
