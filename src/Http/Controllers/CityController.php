<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @param State $state
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(State $state): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'item' => $state->cities()->get(),
        ]);
    }

    /**
     * @param City $city
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(City $city): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'items' => $city,
        ]);
    }
}
