<?php

namespace Mdhesari\LaravelCountryStateCities\Http\Controllers;

use Illuminate\Routing\Controller;
use Mdhesari\LaravelCountryStateCities\Models\Country;
use Mdhesari\LaravelCountryStateCities\Models\State;

class StateController extends Controller
{
    /**
     * Get all states of a specific country
     *
     * @param Country $country
     * @return \Illuminate\Http\JsonResponse
     * @group Country-Cities
     */
    public function index(Country $country): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'item' => $country->states()->get(),
        ]);
    }

    /**
     * Get the specified state
     *
     * @param State $state
     * @return \Illuminate\Http\JsonResponse
     * @group Country-Cities
     */
    public function show(State $state): \Illuminate\Http\JsonResponse
    {
        return api()->success(null,
            [
                'item' => $state,
            ]
        );
    }
}
