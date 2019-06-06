<?php

namespace Sandeepchowdary7\Laratriposo\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see Sandeepchowdary7\Laratriposo\Triposo
 */
class LaratriposoFacade extends Facade {
    protected static function getFacadeAccessor() { return 'Triposo'; }
}