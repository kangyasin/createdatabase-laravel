# Feature

1. create new database with command php artisan make:database db_name
2. migration folder for core and client [SOON].
3. controler for create db and client. [SOON]

## use config/app.php

```php
Kangyasin\CreateDatabase\DatabaseServiceProvider::class,
```

## install package

```markdown
composer require kangyasin/createdatabase
```

## publish vendor

1. php artisan vendor:publish
2. choose config-kangyasin for publish vendor files.
