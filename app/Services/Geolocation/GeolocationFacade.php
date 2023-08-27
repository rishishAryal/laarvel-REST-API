<?php

namespace App\Services\Geolocation;

use Illuminate\Support\Facades\Facade;


/**
 * @method static array search (String $string)
 * @see Geolocation
 */
class GeolocationFacade extends  Facade
{

    protected static function getFacadeAccessor()
    {
        return Geolocation::class; // TODO: Change the autogenerated stub
    }
}
