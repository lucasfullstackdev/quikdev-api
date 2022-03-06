
<p align="center"><img src="https://laravel.com/img/logomark.min.svg" width="100"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<br><br><br>

<h1 align="center">The Movie Database (Back-end)</h1>
<h4 align="center">Uma API desenvolvida para integrar com uma API externa</h4>

## Sobre o projeto
Este projeto tem como finalidade atestar meu conhecimento e experiência com desenvolvimento [PHP](https://www.php.net/manual/pt_BR/intro-whatis.php), utilizando com framework o [LARAVEL](https://laravel.com/) em sua versão mais recente [8x](https://laravel.com/docs/8.x/releases). Este projeto engloba pontos como [rotas](https://laravel.com/docs/8.x/routing), orientação a objetos e padrões de projeto como o [Repository](https://medium.com/laraveltips/voc%C3%AA-entende-repository-pattern-voc%C3%AA-est%C3%A1-certo-disso-d739ecaf544e).

## Sobre as Api's utilizadas
- Todas as api's utilizadas nesta aplicação podem ser encontradas facilmente na internet, bem como a sua documentação
- Segue lista de Api's utilizadas
   - [the movie database](https://developers.themoviedb.org/3)
   
## Por que este projeto?
Este projeto faz parte do meu portfólio pessoal, uma maneira de comprovar meus conhecimentos em LARAVEL.

# Sobre as Rotas
## Filmes
```php
Method: GET
Url: http://127.0.0.1:1350/api/movies

- Para listar todos os filmes mais procurados
```
```php
Method: GET
Url: http://127.0.0.1:1350/api/movies/{id}

- Para listar detalhes de um filme em específico
```
```php
Method: GET
Url: http://127.0.0.1:1350/api/movies/genre/{id}

- Para listar os filmes filtrados por gênero
```
```php
Method: GET
Url: http://127.0.0.1:1350/api/movies/{id}/casts

- Para listar o elenco do filme selecionado
```
## Gêneros
```php
Method: GET
Url: http://127.0.0.1:1350/api/genres

- Para listar todos os gêneros disponíveis
```
## Setup
1. Instale o [composer](https://getcomposer.org/download/)
2. Clone o repositório com o comando `git clone`
3. Acesse o diretório raiz do projeto e rode o comando `composer install`
4. Após a instalação de todas as dependências necessárias, execute o comando `php artisan serve --port 1350`
8. O projeto deve estar disponível no endereco: [localhost:1350](http://localhost:1350/) 

## Considerações finais
Qualquer dúvida ou sugestão, entre em contato pelo e-mail: lucas.fullstack.dev@gmail.com
