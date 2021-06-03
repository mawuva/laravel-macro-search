# Laravel macro that help make search on eloquent model

This package is a macro service provider to make search on your eloquent model

## Installation

You can install the package via composer:

```bash
composer require mawuekom/laravel-macro-search
```

## Usage

### Laravel

Go to **config/app.php**, and add this in the providers key


```php
'providers' => [
    ...
    Mawuekom\MacroSearch\MacroSearchServiceProvider::class,
    ...
]
```

### Lumen

Go to **bootstrap/app.php**, and add this in the specified key

```php
// Add provider 
$app->register(Mawuekom\MacroSearch\MacroSearchServiceProvider::class);
```


### Your model which inherits an eloquent model

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'post_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
```

### Use it to make search

```php

use App\Models\Post;

Post::whereLike(['title', 'content'], 'Post title');

```

### Once done, enjoy it

## Report bug
Contact me on Twitter [@ephraimseddor](https://twitter.com/ephraimseddor)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

