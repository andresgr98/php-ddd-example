<!-- LOGO -->
<p align="center">
  <a href="http://codely.tv">
    <img src="http://codely.tv/wp-content/uploads/2016/05/cropped-logo-codelyTV.png" width="192px" height="192px"/>
  </a>
</p>


<!-- TITLE -->
<h1 align="center">
  🐘🎯 Hexagonal Architecture, DDD & CQRS in PHP Symfony
</h1>


<!-- BADGES -->
<p align="center">
    <a href="https://github.com/CodelyTV"><img src="https://img.shields.io/badge/CodelyTV-OS-green.svg?style=flat-square" alt="codely.tv"/></a>
    <a href="http://pro.codely.tv"><img src="https://img.shields.io/badge/CodelyTV-PRO-black.svg?style=flat-square" alt="CodelyTV Courses"/></a>
    <a href="#"><img src="https://img.shields.io/badge/Symfony-4.2-purple.svg?style=flat-square&logo=symfony" alt="Symfony 4.2"/></a>
    <a href="https://circleci.com/gh/CodelyTV/cqrs-ddd-php-example/tree/master"><img src="https://circleci.com/gh/CodelyTV/cqrs-ddd-php-example/tree/master.svg?style=svg&circle-token=ce12d04556fa79b78bb2beefa0356a6f6934b26b" alt="CircleCI Status"/></a>
</p>


<!-- SUMMARY -->
<p align="center">
  Example of a PHP application following Domain-Driven Design (DDD) and
  Command Query Responsibility Segregation (CQRS) principles keeping the code as simple as possible.
  <br />
  <br />
  Take a look, play and have fun with this.
  <a href="https://github.com/CodelyTV/cqrs-ddd-php-example/stargazers">Stars are welcomed 😊</a>
  <br />
  <br />
  <a href="#table-of-contents"><strong>Explore the docs »</strong></a>
  <br />
  <br />
  <a href="https://www.youtube.com/watch?v=1kaP39W80zQ">View Demo</a>
  ·
  <a href="https://github.com/CodelyTV/cqrs-ddd-php-example/issues">Report Bug</a>
  ·
  <a href="https://github.com/CodelyTV/cqrs-ddd-php-example/issues">Request Feature</a>
</p>


<!-- TABLE OF CONTENTS -->
## Table of Contents

* [🚀 Environment setup](#-environment-setup)
  * [🐳 Docker environment](#-docker-environment)
  * [🎰 Local environment](#-local-environment)
  * [✅ Run the tests](#-run-the-tests)
* [🎥 Project explanation](#-project-explanation)
  * [Bounded Contexts](#bounded-contexts)
  * [Hexagonal Architecture](#hexagonal-architecture)
  * [Aggregates](#aggregates)
  * [Command Bus](#command-bus)
  * [Query Bus](#query-bus)
  * [Event Bus](#event-bus)
* [🧐 Contributing](#-contributing)
* [🤩 Extra](#-extra)


<!-- ENVIRONMENT SETUP -->
## 🚀 Environment setup

### 🐳 Docker environment

* Clone this repository: `git clone https://github.com/CodelyTV/cqrs-ddd-php-example cqrs-ddd-php-example`
* Move to your project folder: `cd cqrs-ddd-php-example`
* Copy the default environment variables: `cp .env.dist .env`
* Start the services: `docker-compose up -d` ([this will perform a composer install](Dockerfile#L4))
* Add `api.codelytv.dev` domain to your local hosts: `echo "127.0.0.1 api.codelytv.dev"| sudo tee -a /etc/hosts > /dev/null`
* Go to [the API healthcheck page](http://api.codelytv.dev:8030/status)

### 🎰 Local environment

If you don't want to use the Docker environment, you can do the following

* A [MySQL](https://www.mysql.com/) database
  - Execute all `.sql` from `/databases` dir
* [Apache](https://httpd.apache.org/)/[Nginx](https://nginx.org/en/)
* [Supervisord](http://supervisord.org/)
  - Execute the `applications/api/bin/console codelytv:domain-events:generate-supervisor-files` command
  - Link the `applications/api/app/config/supervisor` folder to the supervisor config one
  - Start supervisord

### ✅ Run the tests

Once you have all the dependencies, in order to execute the tests, run this command:

* `docker exec -it codelytv-cqrs_ddd_php_example-php vendor/bin/behat -p api` (This will also create all needed databases)
* `docker exec -it codelytv-cqrs_ddd_php_example-php vendor/bin/behat -p applications`
* `docker exec -it codelytv-cqrs_ddd_php_example-php vendor/bin/phpunit`


<!-- PROJECT EXPLANATION -->
## 🎥 Project explanation

### Bounded Contexts

### Hexagonal Architecture
#### Repository pattern

### Aggregates

### Command Bus

### Query Bus

### Event Bus


<!-- CONTRIBUTING -->
## 🧐 Contributing
There are some things missing (add swagger, improve documentation...), feel free to add this if you want! If you want 
some guidelines feel free to contact us :)


<!-- EXTRA -->
## 🤩 Extra
This code was show in the [From framework coupled code to #microservices through #DDD](http://codely.tv/screencasts/codigo-acoplado-framework-microservicios-ddd) talk and doubts where answered in [DDD y CQRS: Preguntas Frecuentes](http://codely.tv/screencasts/ddd-cqrs-preguntas-frecuentes/) video.

🎥 Used in the CodelyTV Pro courses:
* [🇪🇸 Arquitectura Hexagonal](https://pro.codely.tv/library/arquitectura-hexagonal/66748/about/)
* [🇪🇸 CQRS: Command Query Responsibility Segregation](https://pro.codely.tv/library/cqrs-command-query-responsibility-segregation-3719e4aa/62554/about/)
* [🇪🇸 Comunicación entre microservicios: Event-Driven Architecture](https://pro.codely.tv/library/comunicacion-entre-microservicios-event-driven-architecture/74823/about/)
