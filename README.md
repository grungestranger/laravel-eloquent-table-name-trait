# grungestranger/laravel-eloquent-table-name-trait

Provides an Eloquent trait to get the names of tables of your models statically.

## Requirements

* This package requires PHP 7.1+
* It works with Laravel 4.2, 5.x.

## Installation

Require this package with composer

````
composer require grungestranger/laravel-eloquent-table-name-trait
````

Load the trait in your Model.

```php
use Grungestranger\TableName\TableName;

class Example extends Model {

    use TableName;
}
```

To get the name of the table, use the static getTableName method:

```php
Example::getTableName();
```

## License

This open-source software is licensed under the [MIT license](https://opensource.org/licenses/MIT).
