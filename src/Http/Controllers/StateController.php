<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;

class StateController extends Controller
{
    /**
     * @param Country $country
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Country $country): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'item' => $country->states()->get(),
        ]);
    }

    /**
     * @param State $state
     * @return \Illuminate\Http\JsonResponse
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
