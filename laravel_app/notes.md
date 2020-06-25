## Notas 

### Comandos

#### Crear una migracion para crear una tabla (template Table)

```
php artisan make:migration create_todos_table --create=todos
```

#### Ejecutar las migraciones pendientes
```
php artisan migrate
```
#### Hacer Rollback de la ultima migracion
```
php artisan migrate:rollback
```
#### Borrar todas las tablas y volver a correr todas las migraciones
```
php artisan migrate:fresh
```
#### Ante cualquier duda siempre se puede ejecutar el comando con el flag *--help*
```
php artisan make:migration --help
php artisan migrate --help
php artisan migrate:rollback --help
php artisan migrate:fresh  --help
```
#### Crear Un nuevo modelo (Eloquent Model)
```
php artisan make:model Todo
```

#### Si fuese necesario (la tabla tiene un nombre distinto al modelo)
```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // protected $table = 'my_table';
}
```

#### Usando Tinker Para testear el modelo
```
php artisan tinker
```

```
Psy Shell v0.10.4 (PHP 7.3.8 — cli) by Justin Hileman
>>>>>> App\Todo::all();
   => Illuminate\Database\Eloquent\Collection {#3824
        all: [],
      }
>>> $todo = new App\Todo();
    => App\Todo {#3032}
>>> $todo->name = 'test';
    => "test"
>>> $todo->save();
    => true
>>> App\Todo::all();
    => Illuminate\Database\Eloquent\Collection {#3823
         all: [
           App\Todo {#3967
             id: 1,
             name: "test",
             created_at: "2020-06-25 02:10:19",
             updated_at: "2020-06-25 02:10:19",
           },
         ],
       }
>>> exit
```
