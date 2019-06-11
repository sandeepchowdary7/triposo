
# Triposo API Laravel Wrapper #
## A Laravel wrapper for Triposo's PHP wrapper for their REST API ##

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](license.md)
[![Total Downloads][ico-downloads]][link-downloads]

Simple and extensible Triposo API PHP Client with Laravel Facade and ServiceProvider based on Guzzle 6
Currently it supports only userless endpoint requests.

### Installation ###

1) Add the package as a dependency in your composer.json

```
composer require sandeepchowdary7/laratriposo
```

2) publish the vendor config file
```
php artisan vendor:publish --provider="Sandeepchowdary7\Laratriposo\LaratriposoServiceProvider"
```

3) Add your Triposo API token to the config file located in app/config/triposo.php. I recommend you add this key to your project .env file instead of directly adding it to your config file. You can find your API token at the user settings page (https://www.triposo.com).
```
TRIPOSO_API_TOKEN=your token here
```

4) Add your Triposo Account ID  to the config file located in app/config/triposo.php. I recommend you add this key to your project .env file instead of directly adding it to your config file.
```
TRIPOSO_ACCOUNT_ID=Your Account ID here
```

### Laravel <= 5.4
1) Add the following line to your providers array in your `config/app.php` file
```
Sandeepchowdary7\Laratriposo\LaratriposoServiceProvider::class,
```

2) Add the following line to your aliases array in your `config/app.php` file
```
'Triposo' => Sandeepchowdary7\Laratriposo\Facade\LaratriposoFacade::class,
```


### The following functions are available: ###

### Init Triposo rqst
```
 $city = new Triposo();
```

### For city info

```
 $city = new Triposo();
 $city->getCity($cityName);
```

### For city Food info

```
 $cityFood = new Triposo();
 $cityFood->getCityFood($cityName);
```

For more information about the REST API go to this link:
https://www.triposo.com



## License

The MIT License (MIT). Please see [License File](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sandeepchowdary7/laratriposo.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sandeepchowdary7/laratriposo.svg?style=flat-square
[ico-issues]:	https://img.shields.io/github/issues/sandeepchowdary7/triposo.svg?style=flat-square
[ico-stars]:    https://img.shields.io/github/stars/sandeepchowdary7/triposo.svg?style=flat-square
[ico-forks]:    https://img.shields.io/github/forks/sandeepchowdary7/triposo.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sandeepchowdary7/laratriposo
[link-downloads]: https://packagist.org/packages/sandeepchowdary7/laratriposo
[link-author]: https://github.com/sandeepchowdary7
[link-contributors]: ../../contributors
```
