# Laravel Dashboard

A modern, feature-rich dashboard package for Laravel applications that provides a clean and intuitive administrative interface.

## Features

- 🎨 Modern and responsive design
- 🚀 Easy installation and setup
- 🔧 Highly customizable components
- 📊 Built-in analytics and metrics
- 🔐 Authentication and authorization
- 📱 Mobile-friendly interface
- ⚡ Performance optimized
- 🛠️ Extensible architecture

## Requirements

- PHP 8.1 or higher
- Laravel 11.0 or higher
- MySQL 5.7+ / PostgreSQL 10+ / SQLite 3.8+

## Installation

Install the package via Composer:

```bash
composer require rpsohag/laravel-dashboard
```

### Publish Configuration

Publish the configuration file and assets:

```bash
php artisan vendor:publish --tag="laravel-dashboard"
```

### Basic Setup

After installation, the dashboard will be available at `/dashboard` (or your configured route prefix).

### Custom Routes

If you want to customize routes, add them to your application's bootstrap:

```php
// bootstrap/app.php
->withRouting(
    web: __DIR__.'/../routes/web.php',
    commands: __DIR__.'/../routes/console.php',
    health: '/up',
    then: function () {
        Route::middleware('web')
            ->group(base_path('routes/dashboard.php'));
    },
)
```

## Changelog

Please see [CHANGELOG.md](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security vulnerabilities, please send an email to rpsohag.bd@gmail.com instead of using the issue tracker.

## Support

- 📖 [Documentation](https://docs.rpsohag.com/laravel-dashboard)
- 🐛 [Bug Reports](https://github.com/rpsohag/laravel-dashboard/issues)
- 💬 [Discussions](https://github.com/rpsohag/laravel-dashboard/discussions)
- 📧 Email: rpsohag.bd@gmail.com

## Credits

- [RP SOHAG](https://github.com/rpsohag)
- [All Contributors](https://github.com/rpsohag/laravel-dashboard/contributors)

## License

This software is released under the [MIT License](LICENSE.md).

© 2025 RP SOHAG. All rights reserved.