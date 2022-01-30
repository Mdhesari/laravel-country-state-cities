<?php

namespace Mdhesari\LaravelCountryStateCities\Http\Controllers;

use Illuminate\Http\Request;
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
    public function index(Request $request, Country $country): \Illuminate\Http\JsonResponse
    {
        $query = $country->states()->query();

        if ($request->has('s')) {
            $query->where('name', 'like', '%' . $request->get('s') . '%');
        }

        return api()->success(null, [
            'items' => $query->paginate($request->get('per_page', 16)),
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
