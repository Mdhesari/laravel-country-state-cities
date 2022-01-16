<?php

Route::get('countries', [\App\Http\Controllers\CountryController::class, 'index']);
Route::get('countries/{country}', [\App\Http\Controllers\CountryController::class, 'show']);
Route::get('countries/{country}/states', [\App\Http\Controllers\StateController::class, 'index']);
Route::get('states/{state}', [\App\Http\Controllers\StateController::class, 'show']);
Route::get('states/{state}/cities', [\App\Http\Controllers\CityController::class, 'index']);
Route::get('cities/{city}', [\App\Http\Controllers\CityController::class, 'show']);