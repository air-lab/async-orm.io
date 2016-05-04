# Air ORM

Simple and fast ORM library for MySQL / MariaDB (v0.1)

## User Guide

### #0 - Install package from Composer

`$ composer reqiure "air-lab/orm"`

`$ composer install -o`

### #1 - You need to connect to MySQL/MariaDB database

```php
require __DIR__ . '/vendor/autoload.php';

use \Air\Container;
use \Air\Database;
use \Air\Database\ConnectionResolver;

$container = new Container();

$container['db'] = function () {
    $database = new Database\MySQL('127.0.0.1', 'AirORM', 'root', '');
    return $database->connection();
};

ConnectionResolver::apply($container);
```

### #2 - Create your own model

Lets create a model for "Test" table:

```php
use \Air\Model;

class TestModel extends Model {
}
```

or for unusual table name like "my_test_table":

```php
use \Air\Model;

class TestModel extends Model {
    public static $table = 'my_test_table';
}
```
