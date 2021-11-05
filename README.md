# Model credits system for laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chapdel/laravel-credit.svg?style=flat-square)](https://packagist.org/packages/chapdel/laravel-credit)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/chapdel/laravel-credits/Check%20&%20fix%20styling?label=code%20style)](https://github.com/chapdel/laravel-credits/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chapdel/laravel-credit.svg?style=flat-square)](https://packagist.org/packages/chapdel/laravel-credit)

## Installation

You can install the package via composer:

```bash
composer require chapdel/laravel-credit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Chapdel\Credit\CreditServiceProvider" --tag="laravel-credit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Chapdel\Credit\CreditServiceProvider" --tag="laravel-credit-config"
```

This is the contents of the published config file:

```php
return [
    "initial" => 0
];
```

## Usage

### Traits

```php

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Chapdel\Credits\Traits\HasCredits;

class User extends Authenticatable
{
    use HasCredits;
}

```

### Interactions

#### init credits

```php

$user = User::find(1);
$user->initCredits();

```

#### Add credits

```php

$user = User::find(1);
$user->addCredits(500);

```

#### Deducting credits

```php

$user = User::find(1);
$user->deductCredits(50);

```

#### Update credits

```php

$user = User::find(1);
$user->deductCredits(100);

```

#### Getting credits

```php

$user = User::find(1);
$user->credit;

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Chapdel KAMGA](https://github.com/chapdel)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
