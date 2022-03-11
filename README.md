# 🇺🇦 Ukraine Banners for Laravel #StandWithUkraine

We have recently launched [Ukraine Banners](https://ukraine.wavey.group) and to make developers life easier, we have decided to make a Laravel package to allow developers to instantly add their banners through Composer.

## Installation

You can install the package via composer:

```bash
composer require wavey/ukraine-banners
```

Once you have done this, run the following command:

```bash
php artisan ukraine-banners:install
```

This will automatically publish the config along with the views to `/resources/views/vendor/wavey`.

## Usage

Simply add this at the bottom of your layout, just before the `</body>` tag.
```html
<x-ukraine-banner></x-ukraine-banner>
```

You can modify the banner from your `.env` file using the following variables:

```dotenv
UKRAINE_BANNER_ENABLED=true
UKRAINE_BANNER_THEME="dark"
UKRAINE_BANNER_SIZE="small"
UKRAINE_BANNER_POSITION="bottom-right"
```

You can also modify the config from the `config/ukraine-banners.php` file that is published with the install command.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
