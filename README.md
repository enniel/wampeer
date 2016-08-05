[![Build Status](https://travis-ci.org/enniel/wampeer.svg?branch=master)](https://travis-ci.org/enniel/wampeer)

# Wampeer

## Composer

To install as a Composer package to be used with Laravel 5, simply run:

```sh
composer require "enniel/wampeer"
```

Once it's installed, you can register the service provider in `config/app.php` in the `providers` array:

```php
'providers' => [
  \Enniel\Wampeer\Providers\WampeerServiceProvider::class,
]
```

You can use the facade for shorter code. Add this to your aliases:

```php
'aliases' => [
  'WampRouter' => \Enniel\Wampeer\Facades\Router::class,
]
```

Then publish assets with `php artisan vendor:publish`. This will add the file `config/wampeer.php`. 
