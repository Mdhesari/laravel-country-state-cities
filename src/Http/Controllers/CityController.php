<?php

namespace Mdhesari\LaravelCountryStateCities\Http\Controllers;

use Illuminate\Routing\Controller;
use Mdhesari\LaravelCountryStateCities\Models\City;
use Mdhesari\LaravelCountryStateCities\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Get all cities of a specific state
     *
     * @param State $state
     * @return \Illuminate\Http\JsonResponse
     * @group Country-Cities
     */
    public function index(Request $request, State $state): \Illuminate\Http\JsonResponse
    {
        $query = $state->cities();

        if ($request->has('s')) {
            $query->where('name', 'like', '%' . $request->get('s') . '%');
        }

        return api()->success(null, [
            'items' => $query->paginate($request->get('per_page', 16)),
        ]);
    }

    /**
     * Get the specified city
     *
     * @param City $city
     *
     * @return \Illuminate\Http\JsonResponse
     * @group Country-Cities
     */
    public function show(City $city): \Illuminate\Http\JsonResponse
    {
        return api()->success(null, [
            'items' => $city,
        ]);
    }
}
