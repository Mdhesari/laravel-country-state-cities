<?php

namespace Mdhesari\LaravelCountryStateCities\Http\Controllers;

use Illuminate\Routing\Controller;
use Mdhesari\LaravelCountryStateCities\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Get all countries
     *
     * @return \Illuminate\Http\JsonResponse
     * @group Country-Cities
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'items' => Country::paginate(),
        ]);
    }

    /**
     * Get the specified country
     *
     * @param Country $country
     * @return \Illuminate\Http\JsonResponse
     * @group Country-Cities
     */
    public function show(Country $country): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'items' => $country,
        ]);
    }
}
