# Introduction

Guapp Laravel Toolbox is a Swiss Army Knife for Laravel. It contains various useful tools for developing, testing and monitoring Laravel applications.

# Installation

```composer require guapp/laravel-toolbox
```

Add the following line to the `providers` àrray in `config/app.php`

```Guapp\LaravelToolbox\ToolboxServiceProvider::class,
```

# Artisan Commands

`php artisan db:console` opens a mysql prompt logged in to the database configured in .env

