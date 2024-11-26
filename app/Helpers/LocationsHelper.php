<?php

namespace App\Helpers;

use App\Models\Location;

class LocationsHelper
{
    //Obtener datos de la DB
    public static function retrieveLocations()
    {
        $locations = Location::all();

        return $locations;
    }
}
