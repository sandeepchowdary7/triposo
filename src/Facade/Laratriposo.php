<?php

namespace Sandeepchowdary7\Laratriposo\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see Sandeepchowdary7\Laratriposo\Triposo
 */
class Laratriposo extends Facade {
    protected static function getFacadeAccessor() { return 'laratriposo'; }
}