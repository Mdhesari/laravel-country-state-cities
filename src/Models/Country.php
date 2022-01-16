<?php

namespace Mdhesari\LaravelCountryStateCities\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $casts = [
        'translations' => 'array',
        'timezones' => 'array',
    ];

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
