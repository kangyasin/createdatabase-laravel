# Feature

1. create new database with command php artisan make:database db_name
2. migration folder for core and client [SOON].
3. controller for create db and client with /Artisan:: command. [SOON]

## use config/app.php

```php
Kangyasin\CreateDatabase\DatabaseServiceProvider::class,
```

## install package

```markdown
composer require kangyasin/createdatabase:1.0.0
```

## publish vendor

1. php artisan vendor:publish
2. choose config-kangyasin for publish vendor files.

## Test run command

```markdown
php artisan
```

![](https://github.com/kangyasin/createdatabase-laravel/blob/master/img/img-1-laravel-create-database-by-kangyasin.jpg?raw=true)



For make sure config database in your .env and run command

```markdown
php artisan make:database examplekangyasin
```

change **examplekangyasin** with your db name and see in your server db.

update soon !!

please star 