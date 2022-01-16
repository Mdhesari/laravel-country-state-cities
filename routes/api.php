<?php

Route::get('countries', [Mdhesari\LaravelCountryStateCities\Http\Controllers\CountryController::class, 'index']);
Route::get('countries/{country}', [Mdhesari\LaravelCountryStateCities\Http\Controllers\CountryController::class, 'show']);
Route::get('countries/{country}/states', [Mdhesari\LaravelCountryStateCities\Http\Controllers\StateController::class, 'index']);
Route::get('states/{state}', [Mdhesari\LaravelCountryStateCities\Http\Controllers\StateController::class, 'show']);
Route::get('states/{state}/cities', [Mdhesari\LaravelCountryStateCities\Http\Controllers\CityController::class, 'index']);
Route::get('cities/{city}', [Mdhesari\LaravelCountryStateCities\Http\Controllers\CityController::class, 'show']);