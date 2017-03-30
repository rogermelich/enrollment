# Scool/Enrollment

## Installation ##

In a Laravel project execute: 

```bash
composer require scool/enrollment
```

Add to file **config/app.php** the EnrollmentServiceProvider:

```php
...
 /*
 * Package Service Providers...
 */
 Scool\Enrollment\Providers\EnrollmentServiceProvider::class,
... 
```

And publish files with:

```bash
php artisan vendor:publish --tag=scool_enrollment
```

## Database ##

Show Status Migrations to Use:

```bash
php artisan migrate:status
```

To see enrollment migrations and run migrations with:

```bash
php artisan migrate
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [Roger Melich][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/rogermelich
[link-contributors]: ../../contributors