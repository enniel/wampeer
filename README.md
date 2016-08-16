[![Build Status](https://travis-ci.org/enniel/wampeer.svg?branch=master)](https://travis-ci.org/enniel/wampeer)
[![StyleCI](https://styleci.io/repos/65004698/shield)](https://styleci.io/repos/65004698)
[![License](https://poser.pugx.org/enniel/wampeer/license)](https://packagist.org/packages/enniel/wampeer)
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

## Usage

Set up code in the boot method at your provider

```
WampRouter::registerModules([
    // Websocket listener
    new RatchetTransportProvider(),
    // Rawsocket listener
    new RawSocketTransportProvider(),
]);
WampRouter::addInternalClient(new SimpleAuthProviderClient(["testSimpleAuthRealm", "authful_realm"]));
```
