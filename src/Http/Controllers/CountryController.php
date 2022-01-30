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
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        $query = Country::query();

        if ($request->has('s')) {
            $query->where('name', 'like', '%' . $request->get('s') . '%');
        }

        return api()->success(null, [
            'items' => $query->paginate($request->get('per_page', 16)),
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
