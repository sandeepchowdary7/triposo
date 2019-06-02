# Laratriposo

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](license.md)
[![Total Downloads][ico-downloads]][link-downloads]


Simple and extensible Triposo API PHP Client with Laravel Facade and ServiceProvider based on Guzzle 6
Currently it supports only userless endpoint requests.


## Install

Via Composer

``` bash
$ composer require sandeepchowdary7/laratriposo
```


## Usage with Laravel

To use the Laravel Facade you need to add the ServiceProvider and Facade classes in your `config\app.php`

``` php

'providers' => [
    ...
    Sandeepchowdary7\Laratriposo\Provider\LaratriposoServiceProvider::class,
];

'aliases' => [
    ...
    'Laratriposo' => Sandeepchowdary7\Laratriposo\Facade\Triposo::class
];
```

You need to add your Triposo client ID and secret in `config\services.php`

``` php
'triposo' => [
    'account' => YOUR_TRIPOSO_ACCOUNT_ID,
    'token' => YOUR_TRIPOSO_TOKEN
]
```

## Standard Usage

``` php
$config = [
    account = YOUR_TRIPOSO_ACCOUNT_ID,
    token = YOUR_TRIPOSO_TOKEN,
    apiUrl = TRIPOSO_API_URL, //optional
];

$triposo = new Triposo($config);

$city = $triposo->city($searchQuery);
```

## Query filters

If you need to generate, filter or transform your search query you can extract all the logic in a separate class that implements the `Sandeepchowdary7\Laratriposo\Filter\FilterContract`
and then just inject it with `setFilter()` method.

```php
$city = Triposo::setFilter(new MyFilter())->city();
```

Put your filter logic in the parse() method. It will automatically receive the query passed in the search methods.
You can overwrite values, generate values from your custom array or whatever you need. The returned array will be sent with the Triposo request.
```php

/**
* Generate, transform or filter your search query
*
* @param $query
* @return array
*/
public function parse($query = [])
{
    return [
        'll' => $query['city'],
    ];
}
```

Methods


** Searching city **

** Get a single city **

```php
$city = Triposo::city($cityName);
```

** Other venues methods **

```php
// get suggestion @see https://developer.triposo.com/docs
$city = Triposo::suggest($searchQuery);


## License

The MIT License (MIT). Please see [License File](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sandeepchowdary7/laratriposo.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sandeepchowdary7/laratriposo.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sandeepchowdary7/laratriposo
[link-downloads]: https://packagist.org/packages/sandeepchowdary7/laratriposo
[link-author]: https://github.com/sandeepchowdary7
[link-contributors]: ../../contributors