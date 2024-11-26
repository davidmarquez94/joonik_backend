<?php

namespace App\Http\Controllers\api;

use App\Helpers\LocationsHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class JoonikController extends Controller
{
    public function locations() {
        //Trae datos de la base
        try {
            $locations = LocationsHelper::retrieveLocations();
            //Si no hay locaciones, devuelve error 404
            if(count($locations) == 0) {
                return response()->json([
                    'success' => false,
                    'error' => __('messages.no_locations_found')
                ], 404);
            }
            
            //Respuesta exitosa
            return response()->json([
                'success' => true,
                'data' => $locations
            ], 200);
        } catch(Exception $e) {
            //Respuesta de error en el servidor
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
