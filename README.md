# Laravel Ask DB: Natural Language Database Query Builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/beyondcode/laravel-ask-database.svg?style=flat-square)](https://packagist.org/packages/beyondcode/laravel-ask-database)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/beyondcode/laravel-ask-database/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/beyondcode/laravel-ask-database/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/beyondcode/laravel-ask-database/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/beyondcode/laravel-ask-database/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/beyondcode/laravel-ask-database.svg?style=flat-square)](https://packagist.org/packages/beyondcode/laravel-ask-database)

## Notes

> This package is meant to be a learning resource for prompt engineering and how to achieve AI-generated query generation with PHP/Laravel. You should probably not use this in production

> The original package created by [Beyond Code](https://github.com/beyondcode/laravel-ask-database) has been archived, also, it uses hardcoded text-davinci-003 model, and has been deprecated. However, this version supports custom specific models. You can change it into `config/ask-database.php` file, or into your `.env`

Ask DB allows you to use OpenAI's GPT to build natural language database queries.

```php
DB::ask('How many users do we have on the "pro" plan?');

// We have 23 users with "pro" plan.
```

## Installation

Install the package via composer:

```bash
composer require beyondcode/laravel-ask-database
```

Publish the config files with:

```bash
php artisan vendor:publish --tag="ask-database-config"
php artisan vendor:publish --provider="OpenAI\Laravel\ServiceProvider"
```

What about accidental deletions, updates or inserts? By default it's protecting by enabling strict mode. You can disable it. Do that with your own risk

```php
// config/ask-database.php

'strict_mode' => env('ASK_DATABASE_STRICT_MODE', true),
```

## Usage

First, you to configure your OpenAI API key in your `.env` file:

```dotenv
OPENAI_API_KEY=sk-...
```

By default it's using `gpt-3.5-turbo-instruct`. Optionally you can customize it

```dotenv
ASK_DATABASE_MODEL=gpt-3.5-turbo-instruct
```

Then, you can use the `DB::ask()` method to ask the database:

```php
$response = DB::ask('How many users are there?');

// We have 100 users
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Marcel Pociot](https://github.com/mpociot)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
