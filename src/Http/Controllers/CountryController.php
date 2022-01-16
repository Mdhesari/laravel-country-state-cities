<?php

namespace Mdhesari\LaravelCountryStateCities\Http\Controllers;

use Mdhesari\LaravelCountryStateCities\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'items' => Country::paginate(),
        ]);
    }

    /**
     * @param Country $country
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Country $country): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'items' => $country,
        ]);
    }
}
