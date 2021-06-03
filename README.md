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
### Once done, enjoy it

## Report bug
Contact me on Twitter [@ephraimseddor](https://twitter.com/ephraimseddor)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

